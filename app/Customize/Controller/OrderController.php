<?php

namespace Customize\Controller;

use Doctrine\DBAL\DriverManager;
use Eccube\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Customize\Controller\DatabaseConnectionController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class OrderController
{
    use DatabaseConnectionController;

    /**
     * @Method("GET")
     * @Route("/api/orders")
     */
    public function customerOrders(Request $request)
    {
        $order_id = $request->query->get('order_id');
        $customer_id = $request->query->get('customer_id');
        $payment_status = $request->query->get('payment_status');

        $queryBuilder = $this->connection()->createQueryBuilder();
        $queryBuilder
            ->select('*')
            ->from('dtb_order');
        if ($order_id) {
            $queryBuilder
                ->andWhere('id = :order_id')
                ->setParameter('order_id', $order_id);
        }
        if ($customer_id) {
            $queryBuilder
                ->andWhere('customer_id = :customer_id')
                ->setParameter('customer_id', $customer_id);
        }
        if ($payment_status) {
            if ($payment_status == 'PAID') {
                $queryBuilder
                    ->andWhere('payment_date IS NOT NULL');
            } elseif ($payment_status == 'UNPAID') {
                $queryBuilder
                    ->andWhere('payment_date IS NULL');
            }
        }
        
        try {
            $results = $queryBuilder->execute()->fetchAll();

            return new JsonResponse([
                'status_code' => JsonResponse::HTTP_OK,
                'success' => true,
                'requested' => [
                    'order_id' => $order_id,
                    'customer_id' => $customer_id,
                    'payment_status' => $payment_status,
                ],
                'response' => [
                    'data' => $results,
                ],
                'message' => 'データの取得に成功しました。',
            ]);
        } catch (\Exception $e) {
            return new JsonResponse([
                'status_code' => JsonResponse::HTTP_BAD_REQUEST,
                'success' => false,
                'data' => [
                    'requested' => [
                        'customer_email' => $customer_email,
                        'customer_id' => $customer_id,
                    ],
                ],
                'error' => [
                    'key' => [
                        $e->getMessageTemplate(),
                    ],
                ],
            ]);    
        }
    }


    /**
     * @Method("GET")
     * @Route("/api/order_details")
     */
    public function orderDetails(Request $request)
    {
        $order_id = $request->query->get('order_id');
        $product_id = $request->query->get('product_id');

        $queryBuilder = $this->connection()->createQueryBuilder();
        $queryBuilder
            ->select('*')
            ->from('dtb_order_item');

        if ($order_id) {
            $queryBuilder->andWhere('order_id = :order_id')->setParameter('order_id', $order_id);
        }
        if ($product_id) {
            $queryBuilder->andWhere('product_id = :product_id')->setParameter('product_id', $product_id);
        }


        try {
            $results = $queryBuilder->execute()->fetchAll();

            return new JsonResponse([
                'status_code' => JsonResponse::HTTP_OK,
                'success' => true,
                'requested' => [
                    'order_id' => $order_id,
                    'product_id' => $product_id,
                ],
                'response' => [
                    'data' => $results,
                ],
                'message' => 'データの取得に成功しました。',
            ]);
        } catch (\Exception $e) {
            return new JsonResponse([
                'status_code' => JsonResponse::HTTP_BAD_REQUEST,
                'success' => false,
                'data' => [
                    'requested' => [
                        'order_id' => $order_id,
                        'product_id' => $product_id,
                    ],
                ],
                'error' => [
                    'key' => [
                        $e->getMessageTemplate(),
                    ],
                ],
            ]);    
        }
    }
    
}

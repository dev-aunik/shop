<?php

namespace Customize\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Customize\Controller\DatabaseConnectionController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class PrefectureController
{
    use DatabaseConnectionController;

    /**
     * @Method("GET")
     * @Route("/api/prefectures")
     */
    public function prefectures(Request $request)
    {
        $prefecture_id = $request->query->get('prefecture_id');
        $prefecture_name = $request->query->get('prefecture_name');

        try {
            $response = $this->findPrefecture($prefecture_name, $prefecture_id);

            if ($response === null) {
                $queryBuilder = $this->connection()->createQueryBuilder();
                $queryBuilder
                    ->select('id', 'name')
                    ->from('mtb_pref');

                $response = $queryBuilder->execute()->fetchAll();
            }

            return new JsonResponse([
                'status_code' => JsonResponse::HTTP_OK,
                'success' => true,
                'requested' => [
                    'prefecture_id' => $prefecture_id,
                    'prefecture_name' => $prefecture_name,
                ],
                'response' => [
                    'data' => $response,
                ],
                'message' => 'データの取得に成功しました。',
            ]);
        } catch (\Exception $e) {
            return new JsonResponse([
                'status_code' => JsonResponse::HTTP_BAD_REQUEST,
                'success' => false,
                'data' => [
                    'requested' => [
                        'prefecture_id' => $prefecture_id,
                        'prefecture_name' => $prefecture_name,
                    ],
                ],
                'error' => [
                    'message' => $e->getMessage(),
                ],
            ]);
        }
    }

    private function findPrefecture($prefecture_name, $prefecture_id = null)
    {
        $queryBuilder = $this->connection()->createQueryBuilder();
        $queryBuilder
            ->select('id', 'name')
            ->from('mtb_pref');

        if ($prefecture_id !== null) {
            $queryBuilder
                ->where('id = :prefecture_id')
                ->setParameter('prefecture_id', $prefecture_id);
            $result = $queryBuilder->execute()->fetch();
            if (!$result) {
                throw new \RuntimeException('Invalid prefecture_id. Please provide a valid id.');
            }
        }

        if ($prefecture_name && $prefecture_id) {
            $queryBuilder
                ->where('name = :prefecture_name OR id = :prefecture_id')
                ->setParameters([
                    'prefecture_name' => $prefecture_name,
                    'prefecture_id' => $prefecture_id,
                ]);
        } elseif ($prefecture_name) {
            $queryBuilder
                ->where('name = :prefecture_name')
                ->setParameter('prefecture_name', $prefecture_name);
        } elseif ($prefecture_id) {
            $queryBuilder
                ->where('id = :prefecture_id')
                ->setParameter('prefecture_id', $prefecture_id);
        } else {
            return null;
        }

        $result = $queryBuilder->execute()->fetchAll();

        return $result ?: null;
    }
}

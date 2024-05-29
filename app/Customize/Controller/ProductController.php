<?php

namespace Customize\Controller;

use Eccube\Entity\Product;
use Eccube\Entity\Category;
use Eccube\Entity\ProductClass;
use Eccube\Entity\ProductStock;
use Eccube\Entity\ProductImage;
use Eccube\Entity\ClassCategory;
use Eccube\Entity\ProductCategory;
use Eccube\Entity\Master\ProductStatus;
use Doctrine\ORM\EntityManagerInterface;
use Eccube\Controller\AbstractController;
use Eccube\Repository\CategoryRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\File;
use Eccube\Repository\Master\SaleTypeRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Customize\Controller\DatabaseConnectionController;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
// use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\DBAL\Exception;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends AbstractController
{
    /**
     * @var CategoryRepository
     */
    protected $categoryRepository;

    /**
     * @var EntityManagerInterface
     */
    protected $entityManager;

    /**
     * @var SaleTypeRepository
     */
    protected $saleTypeRepository;

    /**
     * EntryController constructor.
     *
     * @param CategoryRepository $categoryRepository
     * @param EntityManagerInterface $entityManager
     * @param SaleTypeRepository $saleTypeRepository
     */
    public function __construct(
        CategoryRepository $categoryRepository,
        EntityManagerInterface $entityManager,
        SaleTypeRepository $saleTypeRepository
    ) {
        $this->categoryRepository = $categoryRepository;
        $this->entityManager = $entityManager;
        $this->saleTypeRepository = $saleTypeRepository;
    }

    use DatabaseConnectionController;


    /**
     * @Method("GET")
     * @Route("/api/products")
     */
    public function productList(Request $request, PaginatorInterface $paginator)
    {
        try {
            $product_name = $request->query->get('product_name');
            $product_id = $request->query->get('product_id');
            $category_id = $request->query->get('category_id');
            $sale_type_id = $request->query->get('sale_type_id');
            $perPage = $request->query->get('paginate');
            $page = $request->query->get('page', 1);

            $queryBuilder = $this->connection()->createQueryBuilder();
            $queryBuilder
                ->select('p.*')
                ->from('dtb_product', 'p');

            if ($product_id) {
                $queryBuilder
                    ->andWhere('p.id = :product_id')
                    ->setParameter('product_id', $product_id);
            }
            if ($product_name) {
                $queryBuilder
                    ->andWhere('p.product_name = :product_name')
                    ->setParameter('product_name', $product_name);
            }

            if ($category_id) {
                $queryBuilder
                    ->join('p', 'dtb_product_category', 'pc', 'p.id = pc.product_id')
                    ->andWhere('pc.category_id = :category_id')
                    ->setParameter('category_id', $category_id);
            }

            if ($sale_type_id) {
                $queryBuilder
                    ->join('p', 'dtb_product_class', 'pc', 'p.id = pc.product_id')
                    ->andWhere('pc.sale_type_id = :sale_type_id')
                    ->setParameter('sale_type_id', $sale_type_id);
            }

            $pagination = $paginator->paginate($queryBuilder, $page, $perPage);

            $results = $pagination->getItems();

            return new JsonResponse([
                'status_code' => JsonResponse::HTTP_OK,
                'success' => true,
                'data' => [
                    'requested' => compact('product_name', 'product_id', 'category_id', 'sale_type_id', 'page', 'perPage'),
                    'response' => [
                        'data' => $results,
                        'pagination' => [
                            'total_items' => $pagination->getTotalItemCount(),
                            'current_page' => $page,
                            'items_per_page' => $perPage,
                            'total_pages' => ceil($pagination->getTotalItemCount() / $pagination->getItemNumberPerPage()),
                        ],
                    ],
                ],
                'message' => 'Data retrieved successfully.',
            ]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'status_code' => JsonResponse::HTTP_BAD_REQUEST,
                'success' => false,
                'data' => [
                    'requested' => [
                        'product_name' => $product_name,
                        'product_id' => $product_id,
                        'category_id' => $category_id,
                        'sale_type_id' => $sale_type_id
                    ],
                ],
                'error' => [
                    'key' => [
                        'message' => $e->getMessage(),
                    ],
                ],
            ]);
        }
    }

    /**
     * @Method("GET")
     * @Route("/api/product/{product_id}")
     */
    public function viewProduct(Request $request, $product_id)
    {
        try {
            $queryBuilder = $this->connection()->createQueryBuilder();
            $queryBuilder
                ->select('p.*, pc.*, cat.*')
                ->from('dtb_product', 'p')
                ->leftJoin('p', 'dtb_product_class', 'pc', 'p.id = pc.product_id')
                ->leftJoin('p', 'dtb_product_category', 'cat', 'p.id = cat.product_id')
                ->andWhere('p.id = :product_id')
                ->setParameter('product_id', $product_id);

            $results = $queryBuilder->execute()->fetchAll();

            if (!$results) {
                throw new \RuntimeException('Product not found. Please provide a valid customer_id.');
            }

            $queryBuilder
                ->select('pi.*')
                ->from('dtb_product_image', 'pi')
                ->andWhere('pi.product_id = :product_id')
                ->setParameter('product_id', $product_id);

            $images = $queryBuilder->execute()->fetchAll();

            $imageUrls = [];
            foreach ($images as $row) {
                if (isset($row['file_name'])) {
                    $imageUrl = $this->getParameter('eccube_save_image_dir') . '/' . $row['file_name'];
                    $imageUrls[] = $imageUrl;
                }
            }

            return new JsonResponse([
                'status_code' => JsonResponse::HTTP_OK,
                'success' => true,
                'requested' => [
                    'product_id' => $product_id,
                ],
                'response' => [
                    'data' => $results[0],
                    'image_urls' => $imageUrls
                ],
                'message' => 'データの取得に成功しました.',
            ]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'status_code' => JsonResponse::HTTP_BAD_REQUEST,
                'success' => false,
                'data' => [
                    'requested' => [
                        'product_id' => $product_id,
                    ],
                ],
                'error' => [
                    'message' => $e->getMessage(),
                ],
            ]);
        }
    }

    /**
     * Handle image upload.
     *
     * @param UploadedFile $file
     * @param SluggerInterface $slugger
     * @param Product $product
     * @return \Eccube\Entity\ProductImage
     */
    private function handleImageUpload(UploadedFile $file, $slugger, $product)
    {
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $slugger->slug($originalFilename);
        $newFilename = $safeFilename . '.' . $file->guessExtension();

        $file->move(
            $this->getParameter('eccube_save_image_dir'),
            $newFilename
        );

        return $newFilename;
    }

    /**
     * ProductCategory作成
     *
     * @param \Eccube\Entity\Product $Product
     * @param \Eccube\Entity\Category $Category
     * @param integer $count
     *
     * @return \Eccube\Entity\ProductCategory
     */
    private function setProductCategory($Product, $Category, $count)
    {
        $ProductCategory = new ProductCategory();
        $ProductCategory->setProduct($Product);
        $ProductCategory->setProductId($Product->getId());
        $ProductCategory->setCategory($Category);
        $ProductCategory->setCategoryId($Category->getId());

        return $ProductCategory;
    }

    /**
     * @Method("POST")
     * @Route("/api/add_product")
     */
    public function addProducts(Request $request, SluggerInterface $slugger)
    {
        $response = new Response();
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Authorization');
        try {
            $productName = $request->get('product_name');
            $saleTypeId = $request->get('sale_type_id', 2);
            $productImages = $request->files->all('product_images');
            $productDescription = $request->get('product_description');
            $sellingPrice = $request->get('selling_price');
            $qtyInStock = $request->get('qty_in_stock');
            $categoryId = $request->get('category_id', null);
            $productCode = $request->get('product_code', null);
            $statusId = $request->get('status_id', 1);
            $saleLimit = $request->get('saleLimit', 1);
            $saleType = $this->saleTypeRepository->find($saleTypeId);
            $category = $this->categoryRepository->find($categoryId);
            $status = $this->entityManager->getRepository(ProductStatus::class)->find($statusId);


            if ($saleTypeId !== null && !$saleType) {
                throw new \Exception('Invalid Sale Type.');
            }

            if ($categoryId !== null && !$category) {
                throw new \Exception('Invalid Product Category.');
            }


            $product = new Product();

            $product->setName($productName);
            $product->setDescriptionDetail($productDescription);
            $product->setStatus($status);

            $this->entityManager->persist($product);
            $this->entityManager->flush();


            $ProductCategory = $this->setProductCategory($product, $category, 1);

            $this->entityManager->persist($ProductCategory);
            $this->entityManager->flush();


            $product->addProductCategory($ProductCategory);
            $this->entityManager->persist($product);
            $this->entityManager->flush();

            $productClass = new ProductClass();
            $productClass->setVisible(true);

            if ($qtyInStock == null) {
                $productClass->setStockUnlimited(true);
            }

            $productClass->setProduct($product);
            $productClass->setSaleType($saleType);
            $productClass->setPrice02($sellingPrice);
            $productClass->setStock($qtyInStock);
            $productClass->setSaleLimit($saleLimit);
            $productClass->setCode($productCode);

            $this->entityManager->persist($productClass);
            $this->entityManager->flush();

            $productStock = new ProductStock();
            $productStock->setProductClass($productClass);

            $productStock->setStock($qtyInStock);

            $productClass->setProductStock($productStock);
            $productStock->setProductClass($productClass);

            $this->entityManager->persist($productStock);
            $this->entityManager->flush();

            $sortNo = 1;
            if ($productImages !== null) {
                foreach ($productImages as $uploadedFile) {
                    $productImage = new \Eccube\Entity\ProductImage();
                    $newFilename = $this->handleImageUpload($uploadedFile, $slugger, $productImage);
                    $productImage->setFileName($newFilename);
                    $productImage->setProduct($product);
                    $productImage->setSortNo($sortNo++);
                    $this->entityManager->persist($productImage);

                    $product->addProductImage($productImage);
                }
                $this->entityManager->flush();
            }

            return new JsonResponse([
                'status_code' => JsonResponse::HTTP_OK,
                'success' => true,
                'data' => [
                    'requested' => compact('productName', 'saleTypeId', 'productDescription', 'sellingPrice', 'qtyInStock', 'categoryId'),
                    'response' => [
                        'product_id' => $product['id'],
                        'message' => 'Product added successfully.',
                    ],
                ],
            ]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'status_code' => JsonResponse::HTTP_BAD_REQUEST,
                'success' => false,
                // 'data' => [
                //     'requested' => compact('productName', 'saleTypeId', 'productDescription', 'sellingPrice', 'qtyInStock', 'categoryId'),
                // ],
                'error' => [
                    'message' => $e->getMessage(),
                ],
            ]);
        }
    }

        /**
     * @Method("POST")
     * @Route("/api/update_product/{id}")
     */
    public function updateProduct(Request $request, SluggerInterface $slugger, $id)
    {
        $response = new Response();
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Authorization');

        $productName = $request->get('product_name');
        $productDescription = $request->get('product_description');
        $qtyInStock = $request->get('qty_in_stock');
        $sellingPrice = $request->get('selling_price');
        $productImages = $request->files->all('product_images');

        $categoryId = $request->get('category_id');
        $statusId = $request->get('status_id');
        $saleLimit = $request->get('saleLimit');

        try {
            if($categoryId){
                $queryBuilder = $this->connection()->createQueryBuilder();
                $queryBuilder
                    ->update('dtb_product_category')
                    ->set('category_id', ':categoryId')
                    ->where('product_id = :id')
                    ->setParameter('categoryId', $categoryId)
                    ->setParameter('id', $id);

                $queryBuilder->execute();
            }

            if($statusId){
                $queryBuilder = $this->connection()->createQueryBuilder();
                $queryBuilder
                    ->update('dtb_product')
                    ->set('product_status_id', ':statusId')
                    ->where('id = :id')
                    ->setParameter('statusId', $statusId)
                    ->setParameter('id', $id);

                $queryBuilder->execute();
            }

            if($saleLimit){
                $queryBuilder = $this->connection()->createQueryBuilder();
                $queryBuilder
                    ->update('dtb_product_class')
                    ->set('sale_limit', ':saleLimit')
                    ->where('product_id = :id')
                    ->setParameter('saleLimit', $saleLimit)
                    ->setParameter('id', $id);

                $queryBuilder->execute();
            }

            $queryBuilder = $this->connection()->createQueryBuilder();
            $queryBuilder
                ->update('dtb_product')
                ->set('name', ':productName')
                ->set('description_detail', ':productDescription')
                ->where('id = :id')
                ->setParameter('productName', $productName)
                ->setParameter('productDescription', $productDescription)
                ->setParameter('id', $id);

            $queryBuilder->execute();

            $queryBuilder = $this->connection()->createQueryBuilder();
            $queryBuilder
                ->update('dtb_product_class')
                ->set('price02', ':sellingPrice')
                ->set('stock', ':qtyInStock')
                ->where('product_id = :id')
                ->setParameter('sellingPrice', $sellingPrice)
                ->setParameter('qtyInStock', $qtyInStock)
                ->setParameter('id', $id);

            $queryBuilder->execute();

            // Update stock in dtb_product_stock table
            $queryBuilder = $this->connection()->createQueryBuilder();
            $queryBuilder
                ->update('dtb_product_stock')
                ->set('stock', ':qtyInStock')
                ->where('product_class_id IN (SELECT id FROM dtb_product_class WHERE product_id = :id)')
                ->setParameter('qtyInStock', $qtyInStock)
                ->setParameter('id', $id);

            $queryBuilder->execute();


            foreach ($productImages as $uploadedFile) {
                $newFilename = $this->handleImageUpload($uploadedFile, $slugger, $id);
                $queryBuilder = $this->connection()->createQueryBuilder();
                $queryBuilder
                    ->update('dtb_product_image')
                    ->set('file_name', ':newFilename')
                    ->where('product_id = :productId')
                    ->setParameter('newFilename', $newFilename)
                    ->setParameter('productId', $id);

                $queryBuilder->execute();
            }

            return new JsonResponse([
                'status_code' => JsonResponse::HTTP_OK,
                'success' => true,
                'message' => 'Product updated successfully.',
            ]);
        } catch (\Exception $e) {
            return new JsonResponse([
                'status_code' => JsonResponse::HTTP_BAD_REQUEST,
                'success' => false,
                'error' => [
                    'message' => $e->getMessage(),
                ],
            ]);
        }
    }

    /**
     * @Method("POST")
     * @Route("/api/update_product_status/{id}")
     */
    public function updateProductStatus(Request $request, $id)
    {
        $response = new Response();
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Authorization');
        $statusId = $request->get('product_status_id');
        try {
            $queryBuilder = $this->connection()->createQueryBuilder();
            $queryBuilder
                ->update('dtb_product')
                ->set('product_status_id', ':statusId')
                ->where('id = :id')
                ->setParameter('statusId', $statusId)
                ->setParameter('id', $id);

            $queryBuilder->execute();
            return new JsonResponse([
                'status_code' => JsonResponse::HTTP_OK,
                'success' => true,
                'message' => 'Product status updated successfully.',
            ]);
        } catch (\Exception $e) {
            return new JsonResponse([
                'status_code' => JsonResponse::HTTP_BAD_REQUEST,
                'success' => false,
                'error' => [
                    'message' => $e->getMessage(),
                ],
            ]);
        }
    }


    /**
     * @Method("POST")
     * @Route("/api/delete_product/{id}")
     */
    public function deleteProduct(Request $request, $id)
    {
        $response = new Response();
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Authorization');

        try {
            // Disable foreign key checks
            $this->connection()->exec('SET FOREIGN_KEY_CHECKS=0');

            // Delete related records from dtb_product_category
            $relatedQueryBuilderCategory = $this->connection()->createQueryBuilder();
            $relatedQueryBuilderCategory
                ->delete('dtb_product_category')
                ->where('product_id = :id')
                ->setParameter('id', $id);
            $relatedDeletedCategory = $relatedQueryBuilderCategory->execute();

            // Delete related records from dtb_product_image
            $relatedQueryBuilderImage = $this->connection()->createQueryBuilder();
            $relatedQueryBuilderImage
                ->delete('dtb_product_image')
                ->where('product_id = :id')
                ->setParameter('id', $id);
            $relatedDeletedImage = $relatedQueryBuilderImage->execute();

            // Delete related records from dtb_product_stock
            $relatedQueryBuilderStock = $this->connection()->createQueryBuilder();
            $relatedQueryBuilderStock
                ->delete('dtb_product_stock')
                ->where('product_class_id IN (SELECT id FROM dtb_product_class WHERE product_id = :id)')
                ->setParameter('id', $id);
            $relatedDeletedStock = $relatedQueryBuilderStock->execute();

            // Delete related records from dtb_product_tag
            $relatedQueryBuilderTag = $this->connection()->createQueryBuilder();
            $relatedQueryBuilderTag
                ->delete('dtb_product_tag')
                ->where('product_id = :id')
                ->setParameter('id', $id);
            $relatedDeletedTag = $relatedQueryBuilderTag->execute();

            // Fetch cart_ids related to the product
            $cartIdsQueryBuilder = $this->connection()->createQueryBuilder();
            $cartIds = $cartIdsQueryBuilder
                ->select('DISTINCT cart_id')
                ->from('dtb_cart_item')
                ->where('product_class_id IN (SELECT id FROM dtb_product_class WHERE product_id = :id)')
                ->setParameter('id', $id)
                ->execute()
                ->fetchAll();

            // Delete related records from dtb_cart_item
            $relatedQueryBuilderCartItem = $this->connection()->createQueryBuilder();
            $relatedQueryBuilderCartItem
                ->delete('dtb_cart_item')
                ->where('product_class_id IN (SELECT id FROM dtb_product_class WHERE product_id = :id)')
                ->setParameter('id', $id);
            $relatedDeletedCartItem = $relatedQueryBuilderCartItem->execute();

            // Delete related records from dtb_cart
            foreach($cartIds as $key=>$cartId){
                if(isset($cartId['cart_id'])){
                    $relatedQueryBuilderCart = $this->connection()->createQueryBuilder();
                    $relatedQueryBuilderCart
                        ->delete('dtb_cart')
                        ->where('id = :id')
                        ->setParameter('id', $cartId['cart_id']);
                    $relatedDeletedCart = $relatedQueryBuilderCart->execute();
                }
            }

            // Delete related records from dtb_product_class
            $relatedQueryBuilderClass = $this->connection()->createQueryBuilder();
            $relatedQueryBuilderClass
                ->delete('dtb_product_class')
                ->where('product_id = :id')
                ->setParameter('id', $id);
            $relatedDeletedClass = $relatedQueryBuilderClass->execute();

            // Proceed with deleting the product
            $queryBuilder = $this->connection()->createQueryBuilder();
            $queryBuilder
                ->delete('dtb_product')
                ->where('id = :id')
                ->setParameter('id', $id);

            $deleted = $queryBuilder->execute();

            // Re-enable foreign key checks
            $this->connection()->exec('SET FOREIGN_KEY_CHECKS=1');

            if ($deleted) {
                return new JsonResponse([
                    'status_code' => JsonResponse::HTTP_OK,
                    'success' => true,
                    'message' => 'Product deleted successfully.',
                ]);
            } else {
                return new JsonResponse([
                    'status_code' => JsonResponse::HTTP_NOT_FOUND,
                    'success' => false,
                    'error' => [
                        'message' => 'Product not found.',
                    ],
                ]);
            }
        } catch (\Exception $e) {
            return new JsonResponse([
                'status_code' => JsonResponse::HTTP_BAD_REQUEST,
                'success' => false,
                'error' => [
                    'message' => $e->getMessage(),
                ],
            ]);
        }
    }




    /**
     * @Method("GET")
     * @Route("/api/categories")
     */
    public function categoryList(Request $request)
    {
        try {
            $category_id = $request->get('category_id');
            $category_name = $request->get('category_name');


            if ($category_id === null && $category_name === null) {
                $categories = $this->categoryRepository->findAll();
                $categoryData = [];

                foreach ($categories as $category) {
                    $categoryData[] = [
                        'id' => $category->getId(),
                        'name' => $category->getName(),
                    ];
                }

                return new JsonResponse([
                    'status_code' => JsonResponse::HTTP_OK,
                    'success' => true,
                    'data' => [
                        'requested' => [
                            'category_id' => $category_id,
                            'category_name' => $category_name
                        ],
                        'response' => [
                            'categoryData' => $categoryData
                        ],
                    ],
                    'message' => '会員登録ありがとうございます',
                ]);
            }

            if ($category_id !== null) {
                $category = $this->categoryRepository->find($category_id);

                if (!$category) {
                    throw new \Exception('Category not found.');
                }

                $categoryData = [
                    'id' => $category->getId(),
                    'name' => $category->getName(),
                ];

                return new JsonResponse([
                    'status_code' => JsonResponse::HTTP_OK,
                    'success' => true,
                    'data' => [
                        'requested' => [
                            'category_id' => $category_id,
                            'category_name' => $category_name
                        ],
                        'response' => [
                            'categoryData' => $categoryData
                        ],
                    ],
                    'message' => '会員登録ありがとうございます',
                ]);
            }

            if ($category_name !== null) {
                $category = $this->categoryRepository->findOneBy(['name' => $category_name]);

                if (!$category) {
                    throw new \Exception('Category not found.');
                }

                $categoryData = [
                    'id' => $category->getId(),
                    'name' => $category->getName(),
                ];

                return new JsonResponse([
                    'status_code' => JsonResponse::HTTP_OK,
                    'success' => true,
                    'data' => [
                        'requested' => [
                            'category_id' => $category_id,
                            'category_name' => $category_name
                        ],
                        'response' => [
                            'categoryData' => $categoryData
                        ],
                    ],
                    'message' => '会員登録ありがとうございます',
                ]);
            }

        } catch (\Exception $e) {
            return new JsonResponse([
                'status_code' => JsonResponse::HTTP_BAD_REQUEST,
                'success' => false,
                'data' => [
                    'requested' => [
                        'category_id' => $category_id,
                        'category_name' => $category_name
                    ],
                ],
                'error' => [
                    'message' => $e->getMessage(),
                ],
            ]);
        }
    }

    /**
     * @Method("GET")
     * @Route("/api/category/{category_id}")
     */
    public function viewCategory(Request $request, $category_id)
    {
        try {
            $queryBuilder = $this->connection()->createQueryBuilder();
                $queryBuilder
                    ->select('id, category_name')
                    ->from('dtb_category')
                    ->where('id = :category_id')
                    ->setParameter('category_id', $category_id);

            $result = $queryBuilder->execute()->fetch();

            if (!$result) {
                throw new \RuntimeException('Category not found. Please provide a valid category_id.');
            }

            return new JsonResponse([
                'status_code' => JsonResponse::HTTP_OK,
                'success' => true,
                'requested' => [
                    'category_id' => $category_id,
                ],
                'response' => [
                    'data' => $result,
                ],
                'message' => 'データの取得に成功しました。',
            ]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'status_code' => JsonResponse::HTTP_BAD_REQUEST,
                'success' => false,
                'data' => [
                    'requested' => [
                        'category_id' => $category_id,
                    ],
                ],
                'error' => [
                    'message' => $e->getMessage(),
                ],
            ]);
        }
    }
}


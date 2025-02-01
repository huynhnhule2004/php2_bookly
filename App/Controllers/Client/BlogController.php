<?php

namespace App\Controllers\Client;

use App\Helpers\NotificationHelper;
use App\Models\BlogCategory;
use App\Views\Client\Components\Notification;
use App\Views\Client\Layouts\Footer;
use App\Views\Client\Pages\Blog\Index;
use App\Views\Client\Pages\Blog\Category as BlogsCategory;
use App\Views\Client\Pages\Blog\Detail;
use App\Views\Client\Layouts\Header;
use App\Models\Blog;
use App\Models\Category;

class BlogController
{
    // hiển thị danh sách
    public static function index()
    {
        // $category = new Category();
        // $categories = $category->getAllCategoryByStatus();


        // $blog = new Blog();
        // $postsPerPage = 3;
        // $currentPage = 1; 
        // $offset = 0; 
        // $blogs = $blog->getBlogsWithLimit($postsPerPage, $offset);
        // $totalPosts = $blog->countTotalBlogs();
        // $totalPages = ceil($totalPosts / $postsPerPage);
        // $data = [
        //     'blogs' => $blogs,
        //     'remainingPosts' => $totalPosts,
        //     'currentPage' => $currentPage,
        //     'totalPages' => $totalPages,
        //     'categories' => $categories

        // ];
        $categories = [
            [
                'id' => 1,
                'name' => 'Danh mục 1',
                'status' => 1
            ],
            [
                'id' => 2,
                'name' => 'Danh mục 2',
                'status' => 1
            ],
            [
                'id' => 3,
                'name' => 'Danh mục 3',
                'status' => 0
            ],

        ];
        $blogs = [
            [
                'id' => 1,
                'name' => 'Product 1',
                'description' => 'Description Product 1',
                'price' => 100000,
                'discount_price' => 10000,
                'image' => 'product.jpg',
                'status' => 1
            ],
            [
                'id' => 2,
                'name' => 'Product 2',
                'description' => 'Description Product 2',
                'price' => 200000,
                'discount_price' => 20000,
                'image' => 'product.jpg',
                'status' => 1
            ],
            [
                'id' => 3,
                'name' => 'Product 3',
                'description' => 'Description Product 3',
                'price' => 300000,
                'discount_price' => 30000,
                'image' => 'product.jpg',
                'status' => 1
            ],
            [
                'id' => 3,
                'name' => 'Product 3',
                'description' => 'Description Product 3',
                'price' => 300000,
                'discount_price' => 30000,
                'image' => 'product.jpg',
                'status' => 1
            ],

        ];
        $data = [
            'blogs' => $blogs,
            'categories' => $categories
        ];
        // Render các phần của trang
        Header::render();
        Index::render($data);
        Footer::render();
    }

    public static function detail($id)
    {
        // $category1 = new Category();
        // $categories1 = $category1->getAllCategoryByStatus();

        // $category = new BlogCategory;
        // $categories = $category->getAll();
        // $blog = new Blog();
        // $blog_detail = $blog->getOneBlog($id);

        // $data = [
        //     'categories' => $categories,
        //     'blog_detail' => $blog_detail
        // ];

        // $data1 = [
        //     'categories' => $categories1,
        // ];

        // echo "<pre>";
        // var_dump($data1);
        $data = [
            'blog' => [
                'id' => 1,
                'title' => '10 Bí Quyết Giúp Bạn Thành Công Trong Công Việc',
                'image' => APP_URL . '/public/assets/client/images/blog-image-1.jpg',
                'author' => 'Lê Thị Huỳnh Như',
                'published_date' => '2025-01-21',
                'content' => '<p>Thành công không chỉ đến từ may mắn, mà còn là kết quả của sự kiên trì, học hỏi và không ngừng cải thiện bản thân. Trong bài viết này, chúng tôi sẽ chia sẻ 10 bí quyết quan trọng giúp bạn đạt được thành công trong công việc.</p>
                              <p>1. Xác định mục tiêu rõ ràng.</p>
                              <p>2. Lập kế hoạch chi tiết.</p>
                              <p>3. Không ngừng học hỏi và cập nhật kiến thức.</p>',
            ],
            'comments' => [
                [
                    'name' => 'Nguyễn Văn A',
                    'created_at' => '2025-01-20 14:30',
                    'content' => 'Bài viết rất hữu ích! Cảm ơn tác giả đã chia sẻ.',
                ],
                [
                    'name' => 'Trần Thị B',
                    'created_at' => '2025-01-21 09:15',
                    'content' => 'Mình rất thích phần lập kế hoạch chi tiết. Rất bổ ích!',
                ],
            ],
            'related_blogs' => [
                [
                    'id' => 2,
                    'title' => 'Cách Quản Lý Thời Gian Hiệu Quả Trong Công Việc',
                    'image' => APP_URL . '/public/assets/client/images/blog-image-2.jpg',
                ],
                [
                    'id' => 3,
                    'title' => '7 Thói Quen Của Người Thành Công',
                    'image' => APP_URL . '/public/assets/client/images/blog-image-3.jpg',
                ],
            ],
        ];
        
        
        Header::render();
        Detail::render($data);
        Footer::render();
    }

    // public static function getBlogByCategory($id)
    // {
    //     $category = new BlogCategory();
    //     $categories = $category->getAllCategory();

    //     $category1 = new Category();
    //     $categories1 = $category1->getAllCategoryByStatus();

    //     $blog = new Blog();
    //     $blogs = $blog->getAllBlogsByCategory($id);

    //     $data = [
    //         'blogs' => $blogs
    //     ];

    //     $data1 = [
    //         'categories' => $categories1,
    //     ];
    // //   echo "<pre/>";
    // //   var_dump($data);

    //     Header::render($data1);
    //     BlogsCategory::render($data);
    //     Footer::render();
    // }
    // // Phương thức xử lý phân trang AJAX
    // public function paginateBlog()
    // {
    //     // Thiết lập header
    //     header('Content-Type: application/json');
    //     header('Access-Control-Allow-Origin: *');
    //     header('Access-Control-Allow-Methods: GET');

    //     // Lấy trang hiện tại, đảm bảo là số nguyên dương
    //     $page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
        
    //     $postsPerPage = 3;
        
    //     // Tính offset
    //     $offset = ($page - 1) * $postsPerPage;

    //     $blog = new Blog();
        
    //     // Lấy danh sách blog cho trang hiện tại
    //     $blogs = $blog->getBlogsWithLimit($postsPerPage, $offset);
        
    //     // Đếm tổng số bài viết
    //     $totalPosts = $blog->countTotalBlogs();
        
    //     // Tính tổng số trang
    //     $totalPages = ceil($totalPosts / $postsPerPage);

    //     // Sinh HTML cho các bài blog
    //     $blogHtml = '';
    //     foreach ($blogs as $item) {
    //         $blogHtml .= $this->generateBlogItemHtml($item);
    //     }

    //     // Sinh liên kết phân trang
    //     $paginationLinks = $this->generatePaginationLinks($page, $totalPages);

    //     // Trả về JSON
    //     echo json_encode([
    //         'blogHtml' => $blogHtml,
    //         'paginationLinks' => $paginationLinks,
    //         'currentPage' => $page,
    //         'totalPages' => $totalPages
    //     ]);
    //     exit;
    // }
    // private function generateBlogItemHtml($item)
    // {
    //     return '<div class="col-md-4">
    //         <div class="card h-100">
    //           <div class="position-relative">
    //             <a href="/blogs/' . htmlspecialchars($item['id']) . '">
    //               <img src="' . APP_URL . '/public/uploads/blogs/' . htmlspecialchars($item['image']) . '" class="card-img-top img-fluid rounded-3" alt="image" style="height: 400px; object-fit: cover;">
    //             </a>
    //             <div class="position-absolute top-0 start-0 bg-light rounded m-2 px-3 py-1">
    //               <h5 class="text-primary mb-0">20</h5>
    //               <small class="text-muted">Feb</small>
    //             </div>
    //           </div>
    //           <div class="card-body d-flex flex-column">
    //             <a href="/blogs/' . htmlspecialchars($item['id']) . '" class="text-decoration-none">
    //               <h5 class="card-title text-dark">' . htmlspecialchars($item['title']) . '</h5>
    //             </a>
    //             <p class="card-text text-muted">' . 
    //             (mb_strlen($item['content']) > 100 
    //             ? htmlspecialchars(mb_substr(strip_tags($item['content']), 0, 100)) . '...' 
    //             : htmlspecialchars(strip_tags($item['content'])))
    //          . 
    //             '</p>
    //             <a href="/blogs/' . htmlspecialchars($item['id']) . '" class="mt-auto text-primary">Đọc thêm</a>
    //           </div>
    //         </div>
    //       </div>';
    // }
    
    // private function generatePaginationLinks($currentPage, $totalPages)
    // {
    //     $links = '<div class="pagination loop-pagination d-flex justify-content-center align-items-center">';
    
    //     // Nút mũi tên trái (Previous)
    //     if ($currentPage > 1) {
    //         $links .= '<a href="javascript:void(0)" 
    //                       class="pagination-arrow d-flex align-items-center mx-3" 
    //                       data-page="' . ($currentPage - 1) . '">
    //                         <iconify-icon icon="ic:baseline-keyboard-arrow-left" class="pagination-arrow fs-1"></iconify-icon>
    //                    </a>';
    //     } else {
    //         $links .= '<span class="pagination-arrow d-flex align-items-center mx-3 disabled">
    //                         <iconify-icon icon="ic:baseline-keyboard-arrow-left" class="pagination-arrow fs-1"></iconify-icon>
    //                    </span>';
    //     }
    
    //     // Tính toán các trang hiển thị
    //     $maxPagesToShow = 4;
    //     $startPage = max(1, $currentPage - 2);
    //     $endPage = min($totalPages, $currentPage + 1);
    //     if ($endPage - $startPage + 1 < $maxPagesToShow) {
    //         if ($startPage == 1) {
    //             $endPage = min($totalPages, $startPage + $maxPagesToShow - 1);
    //         } elseif ($endPage == $totalPages) {
    //             $startPage = max(1, $endPage - $maxPagesToShow + 1);
    //         }
    //     }

    //     for ($i = $startPage; $i <= $endPage; $i++) {
    //         $links .= $this->renderPageLink($i, $currentPage);
    //     }
    
    //     if ($currentPage < $totalPages) {
    //         $links .= '<a href="javascript:void(0)" 
    //                       class="pagination-arrow d-flex align-items-center mx-3" 
    //                       data-page="' . ($currentPage + 1) . '">
    //                         <iconify-icon icon="ic:baseline-keyboard-arrow-right" class="pagination-arrow fs-1"></iconify-icon>
    //                    </a>';
    //     } else {
    //         $links .= '<span class="pagination-arrow d-flex align-items-center mx-3 disabled">
    //                         <iconify-icon icon="ic:baseline-keyboard-arrow-right" class="pagination-arrow fs-1"></iconify-icon>
    //                    </span>';
    //     }
    
    //     $links .= '</div>';
    //     return $links;
    // }
    

    // private function renderPageLink($page, $currentPage)
    // {
    //     if ($page == $currentPage) {
    //         return '<span aria-current="page" class="page-numbers mt-2 fs-3 mx-3 current">' . $page . '</span>';
    //     } else {
    //         return '<a href="javascript:void(0)" 
    //                   class="page-numbers mt-2 fs-3 mx-3" 
    //                   data-page="' . $page . '">' . $page . '</a>';
    //     }
    // }
    
}

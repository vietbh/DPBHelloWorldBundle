# VBHHelloWorldBundle 🚀

**VBHHelloWorldBundle** — Bundle Symfony siêu nhẹ, chỉ để hiển thị dòng chữ "Hello" siêu đơn giản! 😎

---

## Tính năng

- Hiển thị dòng chữ `hello` cực nhanh và gọn
- Dễ dàng tích hợp vào dự án Symfony của bạn
- Cấu hình routing linh hoạt với file XML

---

## Cài đặt

1. ( `composer require vbh/hello-world-bundle` có trên Packagist)

2. Đăng ký bundle trong `config/bundles.php`:

```php
return [
    // Các bundle khác ...
    VBH\HelloWorldBundle\DBPHelloWorldBundle::class => ['all' => true],
];
dbp_hello_world_bundle:
  resource: '@VBHHelloWorldBundle/config/routing/hello_world_routes.xml'
  prefix: /vbh
  
url: /vbh/hello
```
Sử dụng
Chạy server Symfony của bạn và truy cập vào đường dẫn tương ứng trong route để thấy dòng chữ hello vui vẻ!

Đóng góp
Mọi đóng góp đều rất được hoan nghênh!
Hãy tạo issue hoặc pull request trên GitHub nhé! ❤️
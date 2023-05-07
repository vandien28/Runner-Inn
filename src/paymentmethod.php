<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runner Inn - Thanh toán đơn hàng</title>
    <link rel="stylesheet" href="/asset/css/payment.css">
    <link rel="stylesheet" href="../asset/font/awesome-6-pro/css/all.css">
    <link rel="icon" href="../asset/img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="row">
        <div class="main">
            <div class="main-header">
                <a href="">
                    <h1>Runner Inn</h1>
                </a>
                <ul>
                    <li><a href="cart.php" class="current">Giỏ hàng</a><i class="fa-light fa-angle-right"></i></li>
                    <li><a href="shipdetails.php" class="current">Thông tin giao hàng</a><i class="fa-light fa-angle-right"></i></li>
                    <li>Phương thức thanh toán</li>
                </ul>
            </div>
            <div class="main-content">
                <div class="section">
                    <div class="section-shipping field-bottom">
                        <div class="section-header">
                            <h2 class="section-title" >Phương thức vận chuyển</h2>
                        </div>
                        <div class="section-content">
                            <div class="content-box">			
                                <div class="content-box-row">
                                    <div class="radio-wrapper">
                                        <label class="radio-label" for="">
                                            <div class="radio-input payment-method-checkbox">
                                                <input id="" class="input-radio" type="radio" checked>
                                                <label for="" class="circle"></label>
                                            </div>
                                            <span class="radio-label-primary">Giao hàng tận nơi</span>
                                            <span class="radio-accessory content-box-emphasis">0₫</span>
                                        </label>
                                    </div>
                                </div>
                        </div>
                        </div>
                    </div>
                    <div class="section-payment field-bottom">
                        <div class="section-header">
                            <h2 class="section-title">Phương thức thanh toán</h2>
                        </div>
                        <div class="section-content">
                            <div class="content-box">
                                <div class="radio-wrapper content-box-row">
                                    <label class="two-page" for="payment_method_1">
                                        <div class="radio-input payment-method-checkbox">
                                            <input  id="payment_method_1" class="input-radio" name="payment_method" type="radio"  checked>
                                            <label for="payment_method_1" class="circle"></label>
                                        </div>
                                        
                                        <div class="radio-content-input">
                                            <img class="main-img" src="https://hstatic.net/0/0/global/design/seller/image/payment/cod.svg?v=4">
                                            <div class="content-wrapper">
                                                <span class="radio-label-primary">Thanh toán khi giao hàng (COD)</span>
                                           </div>
                                         </div>
                                    </label>
                                </div>
                                <div class="radio-wrapper content-box-row">
                                    <label class="two-page" for="payment_method_2">
                                        <div class="radio-input payment-method-checkbox">
                                            <input  id="payment_method_2" class="input-radio" name="payment_method" type="radio"  >
                                            <label for="payment_method_2" class="circle"></label>
                                        </div>
                                        <div class="radio-content-input">
                                            <img class="main-img" src="https://hstatic.net/0/0/global/design/seller/image/payment/other.svg?v=4">
                                            <div class="content-wrapper">
                                                <span class="radio-label-primary">Chuyển khoản qua ngân hàng</span>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-footer">
                        <a href="cart.php" class="current">Giỏ hàng</a>
                        <form action="ordersuccess.php">
                            <button>Hoàn tất đơn hàng</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar">
            <div class="sidebar-content">
                <div class="order-summary-section order-summary-section-product-list">
                    <table class="product-table">
                        <tbody>
                            <tr class="product" data-product-id="1020297433" data-variant-id="1040409894">
                                <td class="product-image">
                                    <div class="product-thumbnail">
                                        <div class="product-thumbnail-wrapper">
                                            <img class="product-thumbnail-image" alt="Adidas Nmd Xr1 W " pearl=""
                                                grey""=""
                                                src="//product.hstatic.net/1000375638/product/801270_1_c42c68dac62843d8b2d3835de4afb829_small.jpg">
                                        </div>
                                        <span class="product-thumbnail-quantity" aria-hidden="true">1</span>
                                    </div>
                                </td>
                                <td class="product-description">
                                    <span class="product-description-name order-summary-emphasis">Adidas Nmd Xr1 W
                                        "Pearl Grey"</span>

                                    <span class="product-description-variant order-summary-small-text">
                                        Xám / 35
                                    </span>

                                </td>
                                <td class="product-price">
                                    <span class="order-summary-emphasis">5,750,000₫</span>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="order-summary-section order-summary-section-discount">
                    <div class="fieldset">
                        <div class="field">
                            <div class="field-input-btn-wrapper">
                                <div class="field-input-wrapper">
                                    <input placeholder="" class="field-input"  size="30" type="text" value="">
                                    <label for=""  class="field-label" for="">Mã giảm giá</label>
                                </div>
                                <button type="submit" class="field-input-btn">Sử dụng</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order-summary-section order-summary-section-total-lines payment-lines">
                    <table class="total-line-table">
                        <tbody>
                            <tr class="total-line total-line-subtotal">
                                <td class="total-line-name">Tạm tính</td>
                                <td class="total-line-price">
                                    <span class="order-summary-emphasis"
                                        data-checkout-subtotal-price-target="575000000">
                                        5,750,000₫
                                    </span>
                                </td>
                            </tr>
                            <tr class="total-line total-line-shipping">
                                <td class="total-line-name">Phí vận chuyển</td>
                                <td class="total-line-price">
                                    <span class="order-summary-emphasis">Miễn phí</span>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot class="total-line-table-footer">
                            <tr class="total-line">
                                <td class="total-line-name payment-due-label">
                                    <span class="payment-due-label-total">Tổng cộng</span>
                                </td>
                                <td class="total-line-name payment-due">
                                    <span class="payment-due-currency">VND</span>
                                    <span class="payment-due-price" data-checkout-payment-due-target="575000000">
                                        5,750,000₫
                                    </span>
                                    <span class="checkout_version" display:none="" data_checkout_version="123">
                                    </span>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


@extends('layout')
@section('body')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
           <link href="{{asset('css/FQA.css')}}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1 class="text-center mt-5 mb-5">Questions and Answers</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                What types of clothing do you offer?
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse ">
                            <div class="accordion-body">
                                We offer a wide range of men's clothing, including casual wear, formal wear, sportswear, and accessories. Our collection includes shirts, trousers, jeans, suits, jackets, shorts, t-shirts, hoodies, and more. We also provide seasonal collections and special editions that align with the latest fashion trends. 
                            </div>
                          </div>
                        </div>
                    </br>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                Why should I choose your clothing brand?
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                Our clothing is designed with both style and comfort in mind. We use high-quality fabrics and the latest fashion trends to ensure you look great and feel comfortable. Our commitment to quality, affordability, and customer satisfaction makes us a trusted choice for fashion-conscious individuals.
                            </div>
                          </div>
                        </div>
                    </br>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                Do you offer sustainable or eco-friendly clothing options?
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                Yes, we are committed to sustainability and offer a selection of eco-friendly clothing made from organic and recycled materials. We believe in ethical fashion and strive to reduce our environmental impact by choosing sustainable manufacturing processes.
                            </div>
                          </div>
                        </div>
                    </br>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            What are the benefits of shopping with you online?
                        </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            Shopping with us online provides you with convenience, exclusive online discounts, and a wider range of products than in-store. Our user-friendly website and secure payment options make your shopping experience seamless. Plus, enjoy free shipping on orders over a certain amount and easy returns.
                          </div>
                        </div>
                      </div>
                    </br>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            How do I know what size to buy?
                          </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            We have a detailed size guide available on each product page to help you choose the right size. Simply measure yourself and compare your measurements to our size chart. If you need further assistance, our customer service team is always here to help.
                          </div>
                        </div>
                      </div>
                    </div>
                </br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                                        What if the item I ordered doesn’t fit?
                                      </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse">
                                      <div class="accordion-body">
                                        We offer a hassle-free return and exchange policy. If the item you ordered doesn’t fit, you can return it within 30 days for a full refund or exchange it for a different size. Please ensure the item is unworn and in its original packaging.
                                      </div>
                                    </div>
                                  </div>
                                </br>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
                                        What payment methods do you accept?
                                    </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse">
                                      <div class="accordion-body">
                                        We accept various payment methods, including credit/debit cards (Visa, MasterCard, American Express), PayPal, Apple Pay, Google Pay, and Klarna for interest-free installment payments. All transactions are processed securely to protect your personal information.
                                    </div>
                                  </div>
                            </div>
                          </br>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false" aria-controls="panelsStayOpen-collapseEight">
                                        How long will it take to receive my order?
                                      </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse">
                                      <div class="accordion-body">
                                        Shipping times vary depending on your location and the shipping method you choose. Typically, orders are processed and shipped within 1-3 business days. Standard shipping takes 3-7 business days, while expedited options are available at checkout for faster delivery.
                                      </div>
                                  </div>
                            </div>
                          </br>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="false" aria-controls="panelsStayOpen-collapseNine">
                                        How long will it take to receive my order?
                                    </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse">
                                      <div class="accordion-body">
                                        Shipping times vary depending on your location and the shipping method you choose. Typically, orders are processed and shipped within 1-3 business days. Standard shipping takes 3-7 business days, while expedited options are available at checkout for faster delivery.
                                      </div>
                                  </div>
                            </div>
                          </br>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTen" aria-expanded="false" aria-controls="panelsStayOpen-collapseTen">
                                        Do you offer international shipping?
                                      </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseTen" class="accordion-collapse collapse">
                                      <div class="accordion-body">
                                        Yes, we ship worldwide! International shipping costs vary based on your location and will be calculated at checkout. Please note that international orders may be subject to customs duties and taxes, which are the responsibility of the customer.


                                      </div>
                                  </div>
                            </div>
                          </br>
                          
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
        </div>
        
    </body>
    </html>
@endsection
<div class="container section mb-5">
    <div class="row mb-4 text-center">
        <span class="section-title-bold">Paket Hosting Singapura Yang Tepat</span>
        <p class="section-sub-title">Diskon 40% + Domain dan SSL Gratis Untuk Anda</p>
    </div>
    <div>

        <div class="row justify-content-center no-gutters">
            @foreach($products as $product)
            <div class="col-md-3 card-pricing-all">
                @if($product->name == 'Personal')
                <img src="{{ asset('image/Group 2.svg') }}" class="badge-pricing" alt="">
                @endif
                <div class="card @if($product->name == 'Personal') card-pricing-blue @else card-pricing-light @endif">
                    <div
                        class="card-header 
                                @if($product->name == 'Personal') bg-blue-light card-pricing-blue text-white @else product-name @endif ">
                        {{ $product->name }}
                    </div>
                    <div class="card-body @if($product->name == 'Personal') bg-blue-light text-white @endif">
                        <p class="normal-price">Rp
                            {{ number_format($product->price,0,",",".") }}
                        </p>
                        @php
                        $sale_price = number_format($product->sale_price,0,",",".");
                        $prefix_price = explode('.', $sale_price);
                        @endphp
                        <span class="sale-price">
                            <sup>Rp</sup>
                            <b>{{ $prefix_price[0] }}<sup>.{{ $prefix_price[1] }}</sup></b>
                            <sup>/ bln</sup>
                        </span>
                    </div>
                    <div
                        class="card-body @if($product->name == 'Personal') bg-blue-dark card-pricing-blue text-white @else card-pricing-light @endif user-count">
                        <p class="card-text">
                            <b>{{ number_format($product->user_count,0,",",".") }}</b>
                            Pengguna Terdaftar</p>
                    </div>
                    <div class="card-body features-product">
                        @php
                        $features = json_decode($product->features);
                        @endphp
                        <ul>
                            <li>
                                <span class="value">{{ $features->resource }}</span>
                                <span class="value-title">Resource Power</span>
                            </li>
                            <li>
                                <span class="value">{{ $features->disk_space }}</span>
                                <span class="value-title">Disk Space</span>
                            </li>
                            <li>
                                <span class="value">{{ $features->bandwith }}</span>
                                <span class="value-title">Bandwith</span>
                            </li>
                            @if($features->pop3_email != null)
                            <li>
                                <span class="value">{{ $features->pop3_email }}</span>
                                <span class="value-title">POP3 Email</span>
                            </li>
                            @endif
                            <li>
                                <span class="value">{{ $features->database }}</span>
                                <span class="value-title">Databases</span>
                            </li>
                            @if($features->addons_domain != null)
                            <li>
                                <span class="value">{{ $features->addons_domain }}</span>
                                @if($product->name != 'Bayi')
                                <span class="value-title">Addons Domains</span>
                                @else
                                <span class="value-title">Domains</span>
                                @endif
                            </li>
                            @endif
                            @if($features->backup != null)
                            <li>
                                <span class="value">{{ $features->backup }}</span>
                                @if($product->name != 'Bisnis')
                                <span class="value-title">Backup</span>
                                @else
                                <span class="value-title">Backup & Restore</span>
                                @endif
                            </li>
                            @endif
                            @if($features->domain_gratis != null)
                            <li>
                                <span class="value">{{ $features->domain_gratis }}</span>
                                <span class="value-title">Domain Gratis</span>
                            </li>
                            @endif
                            @if($features->unlimited_ssl != null)
                            <li>
                                <span class="value">Unlimited SSL</span>
                                <span class="value-title">{{ $features->unlimited_ssl }}</span>
                            </li>
                            @endif
                            @if($features->name_server != null)
                            <li>
                                <span class="value">{{ $features->name_server }}</span>
                                <span class="value-title">Name Server</span>
                            </li>
                            @endif
                            @if($features->layanan_support != null)
                            <li>
                                <span class="value">{{ $features->layanan_support }}</span>
                                <span class="value-title">Layanan Support</span>
                            </li>
                            @endif
                            @if($product->name == 'Bisnis')
                            <li class="text-primary text-center">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </li>
                            @endif
                            @if($features->mail_protection != null)
                            <li>
                                <span class="value">{{ $features->mail_protection }}</span>
                                <span class="value-title">Mail Protection</span>
                            </li>
                            @endif
                        </ul>
                    </div>
                    <div class="card-body">
                        <a href="#"
                            class="btn @if($product->name == 'Personal') btn-primary @else btn-outline-secondary @endif rounded-pill">
                            @if($product->name == 'Bisnis')
                            Diskon 40%
                            @else
                            Pilih Sekarang
                            @endif
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
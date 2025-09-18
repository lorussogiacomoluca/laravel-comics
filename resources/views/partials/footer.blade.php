@php
    $footer_elements = [
        ['title' => 'Digital Comics', 'img' => 'element_1.png'],
        ['title' => 'DC Merchandise', 'img' => 'element_2.png'],
        ['title' => 'Subscription', 'img' => 'element_3.png'],
        ['title' => 'Comic Shop Locator', 'img' => 'element_4.png'],
        ['title' => 'DC Power Visa', 'img' => 'element_5.svg'],
    ];
@endphp
<footer>
    <div class="container-fluid footer-top">
        <div class="container">
            <div class="row align-items-center py-4 d-flex justify-content-center">
                @foreach ($footer_elements as $element)
                    <div class="col-12 col-md-2 text-center">
                        <img src="{{ Vite::asset('resources/img/' . $element['img']) }}" alt="{{ $element['title'] }}"
                            class="footer-icon me-2">
                        <span class="footer-text">{{ $element['title'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</footer>

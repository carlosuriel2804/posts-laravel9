<x-layouts.app title="Preguntas frecuentes">
    <div class="container my-5">
        <div class="row">
            @foreach($faqs as $faq)
            <div class="bg-light mb-5 px-3 py-3 border rounded">
                <h4>{{$faq->question}}</h4>
                <p class="leader">{{$faq->answer}}</p>
            </div>
            @endforeach
        </div>
    </div>
</x-layouts.app>
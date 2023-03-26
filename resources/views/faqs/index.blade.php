<x-layouts.app title="Preguntas frecuentes">
    <div class="container my-5">
        <h4>Preguntas frecuentes</h4>
        <div class="row my-5">
            @foreach($faqs as $faq)
            <div class="bg-light mb-5 px-3 py-3 border rounded">
                <b>{{$faq->question}}</b>
                <p class="leader my-3">{{$faq->answer}}</p>
            </div>
            @endforeach
        </div>
    </div>
</x-layouts.app>
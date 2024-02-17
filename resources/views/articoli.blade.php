
<x-layout>
    <x-slot:title>Articoli</x-slot>
    <x-navbar></x-navbar>
    <div class="container">
        <div class="row">
            @foreach ($articles as $article)
            <x-card
            :name="$article['name']"
            :title="$article['title']"
            :description="$article['description']"
            :body="$article['body']"
            :id="$article['id']"
            :image="$article['image']"
            ></x-card>
            @endforeach
        </div>
    </div>

</x-layout>

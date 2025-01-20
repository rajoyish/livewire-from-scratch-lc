<div>
   @foreach($articles as $article)
       <div class="mb-8" wire:key="{{ $article->id }}">
           <a href="/articles/{{ $article->id }}">
               <h3 class="text-3xl mb-2 font-bold hover:text-blue-500">{{ $article->title }}</h3>
               <p>{{ str($article->content)->words(30) }}</p>
           </a>
       </div>
   @endforeach
</div>

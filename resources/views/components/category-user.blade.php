
@if (isset(\Auth::user()->grade) && \Auth::user()->grade == 'entreprise')
    <h4><a href="{{ route('entreprise.scope', "0") }}" class="link_menu bleu">Ajout Client</a></h4>
    <h4>/</h4>
    <h4><a href="/posts" class="offres">Voir les offres </a></h4>
@elseif (isset(\Auth::user()->grade) && \Auth::user()->grade == 'admin')

hello
@else
    <h4><a href="#" class="link_menu bleu">Acheter votre carte</a></h4>
    <h4>/</h4>
    <h4><a href="/posts" class="offres">Voir les offres </a></h4>
@endif




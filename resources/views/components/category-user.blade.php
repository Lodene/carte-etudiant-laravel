
@if (isset($_SESSION['usr']['grade']) && $_SESSION['usr']['grade'] == 'entreprise')
    <h4><a href="entreprise/ajout/<?php echo $_SESSION['usr']['id'];?>" class="link_menu bleu">Ajout Client</a></h4>
    <h4>/</h4>
    <h4><a href="/posts" class="offres">Voir les offres </a></h4>
@elseif (isset($_SESSION['usr']['grade']) && $_SESSION['usr']['grade'] == 'admin')

hello
@else
    <h4><a href="#" class="link_menu bleu">Acheter votre carte</a></h4>
    <h4>/</h4>
    <h4><a href="/posts" class="offres">Voir les offres </a></h4>
@endif




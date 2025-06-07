<?php
if (!isset($_SESSION)) session_start();
require_once __DIR__ . "/../includes/config.php";
require_once __DIR__ . "/../includes/conexao.php";
require_once __DIR__ . "/../includes/header.php";
?>

<main>
  <h2>Aulas Assíncronas</h2>
  <p>Abaixo você encontra as aulas gravadas. Clique no vídeo para assistir.</p>

  <div class="video-grid">
    <?php
    $videos = [
      ['arquivo' => 'aula1.mp4', 'titulo' => 'Introdução à Plataforma'],
      ['arquivo' => 'citacao-direta-indireta.mp4', 'titulo' => 'Citação Direta e Indireta - Aula de Português'],
      ['arquivo' => 'short-answers-ingles.mp4', 'titulo' => 'Short Answers - Aula de Inglês'],
      ['arquivo' => 'guerra-fria-resumo.mp4', 'titulo' => 'Guerra Fria - Aula de História'],
    ];

    foreach ($videos as $video) {
      echo '<div class="video-card">';
      echo "  <h3>{$video['titulo']}</h3>";
      echo '  <video width="100%" height="215" controls>';
      echo "    <source src='/EduConnect/videos/{$video['arquivo']}' type='video/mp4'>";
      echo '    Seu navegador não suporta vídeos HTML5.';
      echo '  </video>';
      echo '</div>';
    }
    ?>
  </div>
</main>

<?php include_once(__DIR__ . "/../includes/footer.php"); ?>

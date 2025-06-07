<?php if (!isset($_SESSION)) session_start(); ?>
<?php require_once __DIR__ . "/config.php"; ?>

<header>
  <img src="<?= $base_url ?>/images/logo.png" alt="EduConnect Logo" class="header-logo">
  <?php $tela_atual = $_GET['tela'] ?? 'login'; ?>
  <div class="menu">
    <a href="<?= $base_url ?>/index.php?tela=home" class="<?= $tela_atual === 'home' ? 'active' : '' ?>">Início</a>
    <a href="<?= $base_url ?>/index.php?tela=educadores" class="<?= $tela_atual === 'educadores' ? 'active' : '' ?>">Educadores</a>
    <a href="<?= $base_url ?>/index.php?tela=calendario" class="<?= $tela_atual === 'calendario' ? 'active' : '' ?>">Calendário</a>
    <a href="<?= $base_url ?>/index.php?tela=aulas" class="<?= $tela_atual === 'aulas' ? 'active' : '' ?>">Aulas Assíncronas</a>

  </div>
  <div>
    <span class="usuario">Olá, <a href="<?= $base_url ?>/index.php?tela=perfil"><?= htmlspecialchars($_SESSION['usuario'] ?? '') ?></a>!</span>
    &nbsp;|&nbsp;
    <a href="<?= $base_url ?>/actions/logout.php" class="logout">Sair</a>
  </div>
</header>

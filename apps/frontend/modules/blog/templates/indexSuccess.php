<h1>Posts List</h1>

<table>
  <thead>
    <tr>
      <th>Id post</th>
      <th>Titulo</th>
      <th>Resumen</th>
      <th>Texto</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($posts as $post): ?>
    <tr>
      <td><a href="<?php echo url_for('blog/show?id_post='.$post->getIdPost()) ?>"><?php echo $post->getIdPost() ?></a></td>
      <td><?php echo $post->getTitulo() ?></td>
      <td><?php echo $post->getResumen() ?></td>
      <td><?php echo $post->getTexto() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('blog/new') ?>">New</a>

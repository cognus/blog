<table>
  <tbody>
    <tr>
      <th>Id post:</th>
      <td><?php echo $post->getIdPost() ?></td>
    </tr>
    <tr>
      <th>Titulo:</th>
      <td><?php echo $post->getTitulo() ?></td>
    </tr>
    <tr>
      <th>Resumen:</th>
      <td><?php echo $post->getResumen() ?></td>
    </tr>
    <tr>
      <th>Texto:</th>
      <td><?php echo $post->getTexto() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('blog/edit?id_post='.$post->getIdPost()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('blog/index') ?>">List</a>

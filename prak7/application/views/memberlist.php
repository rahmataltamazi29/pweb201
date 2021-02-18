<div class="container">
  <h3><?=$judul ?></h3>
  <hr>
  <div class="row">
    <div class="col s4">


      <ul>



        <?php foreach ($negara as $neg): ?>
            <li><a href="<?= base_url() ?>member/<?= $neg['negara'] ?>"><?= $neg['negara'] ?></a>

            </li>
          <?php endforeach;   ?>

      </ul>
    </div>
    <div class="col s8">
      <table>
        <thead>
          <tr>
            <th>Member ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Negara</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($members as $member): ?>
            <tr>
              <td><?= $member['member_ID']  ?></td>
              <td><?= $member['nama']  ?></td>
              <td><?= $member['alamat']  ?></td>
              <td><?= $member['negara']  ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

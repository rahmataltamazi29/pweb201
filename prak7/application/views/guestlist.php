<div class="container">
  <h3><?=$judul ?></h3>
  <hr>
  <div class="row">
    <div class="col s4">


      <ul>



        <?php
        for ($l=1; $l <=12 ; $l++) {
          ?>
            <li>
              <a href="<?= $l?>">bulan <?= $l  ?></a>
            </li>

          <?php
        }
         ?>

      </ul>
    </div>
    <div class="col s8">
      <table>
        <thead>
          <tr>
            <th>Date_in</th>
            <th>Date_out</th>
            <th>Member_ID</th>
            <th>room</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($guest as $tamu): ?>
            <tr>
              <td><?= $tamu['date_in']  ?></td>
              <td><?= $tamu['date_out']  ?></td>
              <td><?= $tamu['member_ID']  ?></td>
              <td><?= $tamu['room']  ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

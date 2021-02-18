<div class="container">
  <h3><?=$judul ?></h3>
  <hr>
  <div class="row">
    <div class="col s4">


      <ul>



        <?php
        for ($l=1; $l <=15 ; $l++) {
          ?>
            <li>
              <a href="<?= base_url() ?>rooms/<?= $l ?> ">lantai <?= $l  ?></a>
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
            <th>Room</th>
            <th>rtype</th>
            <th>dview</th>
            <th>F_rate</th>
            <th>Ketersediaan Kamar</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($rooms as $room): ?>
            <tr>
              <td><?= $room['room']  ?></td>
              <td><?= $room['rtype']  ?></td>
              <td><?= $room['dview']  ?></td>
              <td><?= $room['F_rate']  ?></td>
              <td><?php if (empty($room['date_out'])):echo "UNAVAILBLE"; else: echo "AVAILABLE"; endif; ?></td>

            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

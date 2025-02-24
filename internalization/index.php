<?php
if (isset($_GET['lang'])) {
  $lang = $_GET['lang'];
  $file = file_get_contents('lang/' . $lang . '_' . strtoupper($lang) . '.json');
  $langJson = json_decode($file, true);
} 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>I18N</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <nav class="navbar">
      <div class="container">
        <div class="logo">
          <h1>I18N</h1>
        </div>
        <ul>
          <li><a href="#"><?php echo isset($langJson) ? $langJson['home'] : 'Home' ; ?></a></li>
          <li><a href="#"><?php echo isset($langJson) ? $langJson['about_us'] : 'About Us' ; ?></a></li>
          <li><a href="#"><?php echo isset($langJson) ? $langJson['contact_us'] : 'Contact Us' ; ?></a></li>
          <li><a href="#"><?php echo isset($langJson) ? $langJson['register'] : 'Register' ; ?></a></li>
          <li><a href="#"><?php echo isset($langJson) ? $langJson['login'] : 'Login' ; ?></a></li>
          <form class="language-form" method="GET">
            <select name="lang" id="lang" onchange="this.form.submit()">
              <option value="en">English</option>
              <option value="id">Indonesia</option>
              <option value="nl">Dutch</option>
            </select>
          </form>
        </ul>
      </div>
    </nav>

    <article class="article-section">
      <div class="container">
        <h1 class="article-title">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit.
        </h1>
        <div class="article-content">
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat
            facilis laboriosam vero. Nobis, consequuntur, delectus, excepturi
            sunt modi vero numquam ullam magni dolores qui illo quae dicta quia
            quis necessitatibus omnis assumenda. Nesciunt modi, neque esse cum
            temporibus, blanditiis doloribus aut, rerum itaque labore optio ipsa
            dolorem? Dolorum quibusdam tempore eaque quas neque! Rerum dolor
            quam veritatis eligendi amet, excepturi facilis aliquam quo
            aspernatur esse, similique exercitationem soluta velit, nulla et.
            Maiores harum impedit, cumque nesciunt cum debitis nostrum? Commodi
            a veritatis aut dignissimos assumenda harum hic doloremque? Deserunt
            praesentium suscipit harum, assumenda, iure quod provident maxime
            nemo architecto optio pariatur, nihil sequi magnam laborum corporis!
            Numquam soluta eveniet, iste id iusto, temporibus dolorum aperiam
            ullam mollitia quaerat, quas a dolorem ipsam laborum ut? Inventore,
            in! Sapiente cum debitis dolorum quisquam et id possimus nemo,
            repudiandae nam dolore, modi est autem quasi voluptate doloribus
            itaque. Quod enim vel sapiente incidunt et expedita tempora. Quidem,
            atque laboriosam odio illo delectus reprehenderit alias recusandae
            dignissimos optio voluptatem magni quia. Error adipisci omnis cumque
            ipsum soluta eum pariatur molestiae itaque asperiores quo cum
            quibusdam nam cupiditate earum sequi magni reiciendis quaerat sit
            provident, nisi expedita? Rem veritatis consequuntur iure, voluptate
            quae alias autem id maxime totam earum, eveniet sed amet, ullam
            fugit et sit. Ullam reprehenderit id harum asperiores explicabo
            dolores recusandae dolor, nisi placeat vel voluptatem natus sed,
            atque quia! Officia veniam perferendis doloribus eligendi possimus
            maxime est, neque blanditiis aut, dolore soluta deleniti obcaecati
            laborum, quas ea natus odio id minima!
          </p>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita
            facilis voluptatibus voluptatem accusamus, sit quo voluptatum itaque
            labore, eos beatae quibusdam eum praesentium obcaecati dolor
            assumenda perferendis id dolore, vitae optio sint! Quod sapiente id
            nisi amet molestias. Rerum, sequi itaque! Dolor ipsum aut
            perspiciatis nisi quis repellat consequatur amet!
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt
            assumenda culpa totam ullam dicta rem, adipisci beatae libero quae?
            Vero magnam voluptatum libero dolore esse? Ipsa eos autem, illum
            accusantium sapiente fugiat animi unde quibusdam deserunt debitis
            qui velit totam officia, libero quisquam! Molestiae, qui dolor enim
            accusamus mollitia autem quas quia sunt tempore culpa blanditiis
            veniam neque quasi earum omnis et, nulla nesciunt. Assumenda quam
            optio omnis explicabo repudiandae animi, culpa odit dolore tempore
            sed. Ratione, alias! Quaerat ad autem dolorem voluptatum ducimus ea
            eos cumque eum in! Veritatis, voluptates? Quo, beatae quaerat! Fuga
            soluta libero sequi voluptatum dicta veritatis assumenda nisi,
            voluptate facere corrupti odio numquam fugiat earum ducimus quisquam
            harum deserunt sit facilis impedit voluptas non vero.
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
            cupiditate accusamus eum nisi delectus architecto optio dignissimos,
            odit expedita omnis adipisci error suscipit consequatur libero sed
            eaque in eos. Assumenda beatae libero non adipisci laboriosam
            inventore, blanditiis dolore vitae? Repellendus non facere et
            dolores, consequuntur pariatur repellat reiciendis sapiente quidem?
          </p>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio error
            sit eveniet, magni facilis aperiam iusto voluptatem porro officiis
            ab quo nihil magnam recusandae nam praesentium dolorum libero amet
            repellendus voluptatibus atque consequatur distinctio iure fugit.
            Laudantium cumque quibusdam possimus illo illum laboriosam earum.
            Nostrum natus repudiandae exercitationem hic praesentium voluptatem,
            nam consequatur repellat deleniti reiciendis ut adipisci eligendi
            aut obcaecati alias quia facilis! Voluptatibus ipsam aperiam
            praesentium fugit, qui quae, necessitatibus minus incidunt iure
            commodi impedit totam nesciunt ratione nihil nam! Sint quibusdam
            numquam soluta, sit suscipit veniam a distinctio quisquam aliquid
            architecto corporis minima totam, quos explicabo odio dignissimos
            commodi harum ipsa sapiente reprehenderit quae. Optio corrupti a
            officiis dolore, perferendis cumque. Eius blanditiis magni quisquam
            ad soluta earum accusantium totam labore alias, voluptas nobis,
            officia sint culpa reiciendis quaerat dicta unde incidunt minima at
            accusamus necessitatibus ullam amet autem. Sit molestias
            perspiciatis porro ullam necessitatibus possimus consequatur.
          </p>
        </div>
      </div>
    </article>

    <footer>
      <div class="container">
        <div class="copyright"><?php echo isset($langJson) ? $langJson['copyright'] : 'Copyright' ; ?> &copy; 2022</div>
      </div>
    </footer>
  </body>
</html>

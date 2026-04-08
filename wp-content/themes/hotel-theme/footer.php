    </main>

    <footer class="footer py-3 bg-dark text-white text-center">

    <?php
    $hotelName = get_bloginfo("name");
    $contact = get_field("contact", get_option("page_on_front"));
    $map= get_field("map", get_option("page_on_front"));
    ?>
    <img src="<?= $map["url"] ?>" alt="Hotel Map" width="300" height="230">

    <div>
        <p><?= $hotelName ?></p>
        <p><?= $contact["address"] ?></p>
        <p><?= $contact["zipcode"] ?> <?= $contact["city"] ?></p>
        <p>Tlf. <?= $contact["phone_number"] ?></p>
    </div>
        &copy; Copyright 2026 Hotel CMS. All rights reserved.
    </footer>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
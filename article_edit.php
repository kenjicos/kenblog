<!DOCTYPE html>
<html>
<head>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/summernote-master/dist/summernote.css">
    <meta charset="UTF-8">
    <title>Edit Blog</title>
    <style type="text/css">
        .bg-white {
            background: #ffffff;
            opacity: .9;
        }
        .popover-content{
            display: none;

    </style>
</head>
<body style="background: url('images/background.jpg') fixed; background-size: auto;">
<div class="container  bg-white">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="index.php">KEN BLOG</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="text-muted" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
                </a>
                <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <h5>
            <a class="p-2 text-muted" href="#">World</a>
            <a class="p-2 text-muted" href="#">Thailand</a>
            <a class="p-2 text-muted" href="#">Technology</a>
            <a class="p-2 text-muted" href="#">Design</a>
            <a class="p-2 text-muted" href="#">Culture</a>
            <a class="p-2 text-muted" href="#">Business</a>
            <a class="p-2 text-muted" href="#">Politics</a>
            <a class="p-2 text-muted" href="#">Opinion</a>
            <a class="p-2 text-muted" href="#">Science</a>
            <a class="p-2 text-muted" href="#">Health</a>
            <a class="p-2 text-muted" href="#">Style</a>
            <a class="p-2 text-muted" href="#">Travel</a>
            </h5>
        </nav>
    </div>

    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <form action="create.php" method="post">
            <h2>Create blog:</h2>
            <input type="text" class="form-control" value="“JAPAN EXPO THAILAND”THE BIGGEST ALL JAPAN EVENT IN THAILAND AND ASIA" placeholder="Title">
            <h2>Content:</h2>
            <textarea class="summernote" name="editordata">
                <img class="d-block w-100" src="images/japan.jpg" >
                <br>
                <p>  มหกรรมญี่ปุ่นที่ยิ่งใหญ่ที่สุดในประเทศไทยและในแถบเอเชียภายใต้ชื่องาน “Japan Expo Thailand 2018” สำหรับครั้งนี้ ถือเป็นครั้งที่ 4 ภายใต้แนวคิด “Infinite Japan” เนรมิตลานหน้าศูนย์การค้าเซ็นทรัลเวิลด์ จัดเต็มสุดอลังการทั้งด้านความบันเทิงจากศิลปินญี่ปุ่น การ์ตูน แอนิเมชั่น ศิลปะ วัฒนธรรม อาหาร แฟชั่น บันเทิง การท่องเที่ยว และการศึกษา ซึ่งตอบโจทย์ความสนใจของผู้ที่ชื่นชอบเรื่องราวต่างๆ ที่เกี่ยวข้องกับญี่ปุ่น จึงนับได้ว่าทุกจุดของงานนี้ คือไฮไลท์! ไม่ว่าจะเป็นโซนไหนก็มีไฮไลท์สำคัญให้ร่วมทำอย่างตื่นตาตื่นใจตลอดงาน!!! อาทิ</p>
                <ul>
                    <li><strong>Japan Expo Thailand</strong> จะถูกแบ่งเป็นโซน Indoor Zone ซึ่งจะมี Culture Zone สัมผัสวัฒนธรรมญี่ปุ่นทั้งแบบดั้งเดิมและแบบร่วมสมัย และโชว์จากศิลปินและไอดอลชื่อดังของญี่ปุ่นมาสร้างความสุขให้กับคนไทย</li>
                    <li><strong>BtoB Zone </strong>หรือโซนเจรจาธุรกิจ ที่จะเปิดโอกาสให้เศรษฐกิจทั้ง2ประเทศได้ทำความสัมพันธ์และเติมโตไปพร้อมกับการแลกเปลี่ยนทางเศรษฐกิจอีกด้วย</li>
                    <li><strong>Japan Promotion Zone</strong>ที่สถานีโทรทัศน์จากญี่ปุ่นจะมาโปรโมทรายการ, สินค้าใหม่ๆ ที่สำคัญจะมีการเปิดตัวอนิเมะ เพื่อให้แฟนๆ ได้ดาวน์โหลด application กันด้วย</li>
                    <li><strong>Travel & Prefecture</strong>ที่ทาง JTB จะนำ JR Pass (ตั๋วรถไฟ) มาให้คนไทยได้ช้อปกันอย่างเมามันส์ในราคาพิเศษ พร้อมแพ็คเกจทัวร์ญี่ปุ่นราคาพิเศษ สุดยอด สุดคุ้ม </li>
                    <li><strong>Education</strong>ก็ไม่น้อยหน้า เพราะมีโต้โผใหญ่อย่างโรงเรียนสอนภาษาญี่ปุ่น Mainichi มาจัดหนักจัดเต็ม ให้ความรู้และแนะนำเรื่องการเรียนภาษาญี่ปุ่น ทุนการศึกษา ร่วมฟังสัมมนา และให้คำปรึกษาเรื่องการไปเรียนต่อที่ประเทศญี่ปุ่นตลอด 3 วันเต็ม!!!</li>
                    <li><strong>Japan Expo Stage</strong>ก็จะขนทัพศิลปินชื่อดังของญี่ปุ่นมาสร้างความสุขให้กับคนไทย </li>
                    <li><strong>Harajuku in Bangkok </strong>โดยดีไซเนอร์ชื่อก้องของเมืองไทย กุ้ง-ศรุดา นิ่มพิทักษ์พงษ์ ก็ยังคงจัดหนัก จัดเต็มเวทีอีกเช่นเคย คาดว่าจะมีเหล่าเซเบริตี้และคนในวงการบันเทิงร่วมตบเท้าขึ้นเวทีทั้งเด็กและผู้ใหญ่หลายสิบคนเป็นแน่!!</li>
                    <li><strong>Taste of Japan</strong>โซนอาหารที่เรียกได้ว่าครบรสความอร่อยแบบสุดๆ จะยกทัพ Osaka food zone มาวางไว้ที่นี่ทั้งโซน รวมทั้ง Street Osaka สุดยอดของความอร่อยและอร่อยถึงที่สุด</li>
                    <li><strong>Anime & game</strong>ในส่วนของมหาวิทยาลัยโซนก็จัดเต็มทั้ง 10 มหาวิทยาลัย มีเรื่องของการให้ที่ไม่มีที่สิ้นสุด </li>
                    <li><strong>Japan Festa in Bangkok Stage</strong>เวทีที่รวมทุกกิจกรรมความบันเทิงเกี่ยวกับญี่ปุ่น อาทิ การประกวด Cover Dance การแข่งขันคอสเพลย์ประจำปีที่ยิ่งใหญ่ที่สุดในเมืองไทย และ J-Live MusicS</li>
                </ul>
            </textarea>
        </form>
    </div>

    &nbsp;&nbsp;<input class="btn btn-sm btn-outline-secondary" value="POST">
</div>

<main role="main" class="container bg-white">
    <div class="row">
        <div class="col-md-8 blog-main">
            <h3 class="pb-3 mb-4 font-italic border-bottom">
            </h3>
        </div><!-- /.blog-main -->
    </div><!-- /.row -->
</main><!-- /.container -->

<footer class="blog-footer bg-white">
    <p>Kenji built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.
    </p>
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
<script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<script src="https://getbootstrap.com/assets/js/vendor/holder.min.js"></script>
<script src="/assets/summernote-master/dist/summernote.js"></script>
<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
    $(document).ready(function () {
        $('.summernote').summernote({
            placeholder: 'Content',
            height: 500
        });
    });
</script>

</body>
</html>
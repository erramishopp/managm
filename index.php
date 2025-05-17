<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>نظام إدارة الجمعيات</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      font-family: 'Cairo', sans-serif;
      background: #f5fbff;
      color: #222;
    }

    header {
      background: linear-gradient(to left, #0099ff, #005fa3);
      color: white;
      padding: 60px 20px;
      text-align: center;
    }

    header h1 {
      margin: 0;
      font-size: 42px;
    }

    header p {
      font-size: 20px;
      margin-top: 15px;
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
    }

    nav {
      text-align: center;
      margin: 20px;
    }

    nav a {
      background-color: #007bff;
      color: white;
      text-decoration: none;
      margin: 10px;
      padding: 12px 25px;
      border-radius: 8px;
      transition: 0.3s;
      font-weight: bold;
    }

    nav a:hover {
      background-color: #0056b3;
    }

    .features {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 25px;
      padding: 50px 30px;
    }

    .feature {
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 25px;
      text-align: center;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }

    .feature h3 {
      color: #007bff;
      margin-bottom: 10px;
    }

    .cta {
      text-align: center;
      padding: 60px 20px;
      background-color: #e8f4ff;
    }

    .cta h2 {
      color: #0056b3;
      font-size: 28px;
      margin-bottom: 15px;
    }

    .cta p {
      font-size: 18px;
      max-width: 700px;
      margin: 0 auto 20px;
    }

    .cta a {
      background-color: #28a745;
      color: white;
      padding: 14px 28px;
      font-size: 16px;
      text-decoration: none;
      border-radius: 6px;
      transition: 0.3s;
    }

    .cta a:hover {
      background-color: #1e7e34;
    }

    section {
      padding: 50px 20px;
      max-width: 900px;
      margin: auto;
    }

    section h2 {
      color: #007bff;
      margin-bottom: 15px;
    }

    section p {
      line-height: 1.8;
    }

    footer {
      background-color: #f0f0f0;
      text-align: center;
      padding: 20px;
      font-size: 14px;
      color: #555;
    }
  </style>
</head>
<body>

<header>
  <h1>نظام إدارة الجمعيات المتكامل</h1>
  <p>منصة حديثة تُمكّن جميع أنواع الجمعيات من إدارة أنشطتها، أعضائها، اجتماعاتها، واشتراكاتها بكفاءة عالية وواجهة احترافية.</p>
</header>

<nav>
  <?php if (isset($_SESSION['user_id'])): ?>
    <a href="/tassir/tassir/register.php">لوحة التحكم</a>
  <?php else: ?>
    <a href="login.php">تسجيل الدخول</a>
    <a href="register.php">إنشاء حساب</a>
  <?php endif; ?>
  <a href="#about">من نحن</a>
  <a href="#contact">اتصل بنا</a>
</nav>

<section class="features">
  <div class="feature">
    <h3>إدارة الاجتماعات</h3>
    <p>توثيق الاجتماعات، الحضور، والمخرجات بسهولة.</p>
  </div>
  <div class="feature">
    <h3>إدارة الاشتراكات</h3>
    <p>متابعة الاشتراكات وتجديدها تلقائيًا مع تنبيهات.</p>
  </div>
  <div class="feature">
    <h3>إدارة مالية</h3>
    <p>تحكم كامل في المصاريف والإيرادات والتقارير.</p>
  </div>
  <div class="feature">
    <h3>أنواع جمعيات متنوعة</h3>
    <p>يدعم الجمعيات التربوية، الثقافية، البيئية، الاجتماعية والمزيد.</p>
  </div>
</section>

<section class="cta">
  <h2>ابدأ رحلة التسيير الذكي لجمعيتك</h2>
  <p>نظام سهل وآمن، يقدم لك الأدوات المناسبة لتنظيم عمل الجمعية وتحقيق الأهداف بأقل مجهود.</p>
  <?php if (!isset($_SESSION['user_id'])): ?>
    <a href="register.php">ابدأ مجانًا الآن</a>
  <?php endif; ?>
</section>

<section id="about">
  <h2>من نحن</h2>
  <p>
    نحن فريق من المطورين والمهتمين بالعمل الجمعوي، صممنا هذا النظام لتوفير حل رقمي متكامل ومجاني لجمعيات المغرب والعالم العربي. هدفنا هو تمكين الجمعيات من تسيير أعمالها بأحدث التقنيات دون الحاجة إلى خبرة تقنية.
  </p>
</section>

<section id="contact">
  <h2>اتصل بنا</h2>
  <p>
    نسعد بتواصلكم معنا لأي استفسار، اقتراح أو دعم فني.<br>
    📧 البريد الإلكتروني: <a href="mailto:support@jam3iyat.ma">support@jam3iyat.ma</a><br>
    📱 الهاتف: 0630601172<br>
    💬 واتساب: <a href="https://wa.me/212630601172" target="_blank">راسلنا الآن</a>
  </p>
</section>

<footer>
  &copy; <?php echo date("Y"); ?> - جميع الحقوق محفوظة | نظام إدارة الجمعيات.
</footer>

</body>
</html>

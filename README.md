<h1 id="" lang="fa" dir="rtl" align="right">داده‌ساز فارسی</h1>

<p lang="fa" dir="rtl" align="right">برای آن‌که طرح‌های آزمایشی خود را با داده‌های غیر واقعی و تصادفی پر کنید!
برنامه‌نویس: <a href="https://webpajooh.github.io/WebPajooh/">وب‌پژوه</a></p>

<h2 id="-1" lang="fa" dir="rtl" align="right">شیوه‌ی استفاده</h2>
<p lang="fa" dir="rtl" align="right">برای استفاده ابتدا فایل PersianFaker.php را فراخوانی کنید، سپس با استفاده از متد get به فراخوانی زمینه‌ی مورد نظر پرداخته و پارامتر دوم را به تنظیمات اختصاص دهید.</p>

<h2 id="-2" lang="fa" dir="rtl" align="right">مثال</h2>
<pre><code>&lt;?php
include 'PersianFaker.php';
echo PersianFaker::get('FullName', ['sex' =&gt; 'f']);
</code></pre>

<h2 id="-3" lang="fa" dir="rtl" align="right">زمینه‌ها</h2>
<ul>
<li>MaleName</li>

<li>FemaleName</li>

<li>LastName</li>

<li>FullName</li>

<li>City</li>

<li>Certificate (مدرک تحصیلی)</li>

<li>Age</li>
<li>Job</li>
<li>Phone</li>
</ul>

<h2 id="-4" lang="fa" dir="rtl" align="right">تنظیمات</h2>
<ul lang="fa" dir="rtl" align="right">
<li lang="fa" dir="rtl" align="right">زمینه‌ی Age به آرایه‌ای شامل دو کلید min و max نیاز دارد که هر دو مقداری عددی هستند.</li>
<li lang="fa" dir="rtl" align="right">زمینه‌ی Phone یک گزینه به نام withCountryCode از نوع Boolean دارد که در صورت Trueشدن، کد ایران در ابتدای شماره خواهد آمد.</li>
</ul>

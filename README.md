<h1 id="" lang="fa" dir="rtl" align="right">داده‌ساز فارسی</h1>

<p lang="fa" dir="rtl" align="right">برای آن‌که طرح‌های آزمایشی خود را با داده‌های غیر واقعی و تصادفی پر کنید!
برنامه‌نویس: <a href="https://webpajooh.github.io/WebPajooh/">وب‌پژوه</a></p>

<h2 id="-1" lang="fa" dir="rtl" align="right">شیوه‌ی استفاده</h2>
<p lang="fa" dir="rtl" align="right">با دستور زیر، پکیج PersianFaker را نصب کنید:</p>
<code>composer require webpajooh/persian-faker</code>

<h2 id="-2" lang="fa" dir="rtl" align="right">مثال</h2>
<pre><code>&lt;?php
use PersianFaker\PersianFaker;

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
<li>IdentityCode (کد ملی)</li>
<li>Job</li>
<li>Phone</li>
<li>Email</li>
<li>Lorem</li>
</ul>

<h2 id="-4" lang="fa" dir="rtl" align="right">تنظیمات</h2>
<ul lang="fa" dir="rtl" align="right">
<li lang="fa" dir="rtl" align="right">زمینه‌ی Age به آرایه‌ای شامل دو کلید min و max نیاز دارد که هر دو مقداری عددی هستند.</li>
<li lang="fa" dir="rtl" align="right">زمینه‌ی FullName تنها یک گزینه دارد که کلید sex به معنای جنسیت است و یکی از دو مقدار m (برای نام‌های مردانه) و f (برای نام‌های زنانه) را می‌پذیرد.</li>
<li lang="fa" dir="rtl" align="right">زمینه‌ی Phone یک گزینه به نام withCountryCode از نوع Boolean دارد که در صورت Trueشدن، کد ایران در ابتدای شماره خواهد آمد.</li>
<li lang="fa" dir="rtl" align="right">زمینه‌ی Lorem برای ایجاد متن آزمایشی (لورم ایپسوم) است و یک گزینه به عنوان words دارد که تعداد کلمات درخواستی را تعیین می‌کند و در صورتی که این گزینه تعیین نگردد، تمام متن آزمایشی را برمی‌گرداند.</li>
</ul>

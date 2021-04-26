<!DOCTYPE html>
<html lang="ja">
<script type="text/javascript" src="contact.js"></script>
<head>
     <meta charset="utf-8">
    <title>kamekame diving shop</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <header>
       <h1>
           <a>kamekame diving shop</a>
        </h1>
           <nav class="pc-nav">
               <ul>
                   <li><a>price</a></li>
                   <li><a>access</a></li>
                   <li><a>contactform</a></li>
               </ul>
           </nav>
    </header>
    <div class="top-wapper">
        <h2>Wonderful underwater world</h2>
    </div>
    <div class="prece-wapper">
        <h2>price</h2>
        <table>
            <tr>
              <th>half day</th>
              <td>¥10,000</td>
            </tr>
            <tr>
              <th>1day</th>
              <td>¥15,000</td>
            </tr>
            <tr>
              <th>fan diving</th>
              <td>¥14,000</td>
            </tr>
            
          </table>
    </div>
    <div class="access-wapper">
        <h2>access</h2>
        <div class="google-maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1858.9393940731707!2d-157.8282025419492!3d21.27626509646626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c007276b31ddc43%3A0xb89cd9ba3eae78ac!2zV2Fpa2lraSBCZWFjaCwgSG9ub2x1bHUsIEhJIDk2ODE1IOOCouODoeODquOCq-WQiOihhuWbvQ!5e0!3m2!1sja!2sjp!4v1619244537401!5m2!1sja!2sjp" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <div class="contactform-wapper">
        <form action="confirm.php" method="post" name="form" onsubmit="return validate()">
        <h1 class="contact-title">Reservation input</h1>
        <div>
            <div>
                <label>Name</label>
                <input type="text" name="name" value="">
            </div>
            <div>
                <label>Email</label>
                <input type="text" name="email" value="">
            </div>
            <div> 
                <label>Tel</label>
                <input type="tel" name="tel" value="">
            </div>
                <label>Gender</label>
                <input type="radio" name="sex" value="男性" checked> men
                <input type="radio" name="sex" value="女性"> women
            </div>
            <div>
                <label>Course</label>
                <select name="item">
                    <option value="ご質問・お問い合わせ">half day</option>
                    <option value="ご意見・ご感想">1day</option>
                    <option balue="fandiving">fan diving</option>
                </select>
            </div>
            <div>
                <label>Dates</label>
                <input type="text" name="tel" placeholder="24/04/2021" value="">
        </div>
        <button type="submit" class="form-submit-button">Go</button>
    </form>
        
    </div>
    
    <footer></footer>
</body>

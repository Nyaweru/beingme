<!DOCTYPE html>
<html>
    <head>
    
    <title>MARIAMA LAUNDRY SERVICES </title>
    <link rel ="stylesheet" href ="style.css">
    </head>
    <body>
        <div class="topnav">
            <h1>MARIAMA LAUNDRY SERVICES</h1>
            <br>
            
          <a href="BOOK.php" class="button">BOOK NOW</a>
            <h2> Your N0.1 expert cleaning partner</h2>
            <img src="https://th.bing.com/th/id/R.da784554b1d0ad32bea6b0a9432d430f?rik=21m6UVGzmNQBmg&pid=ImgRaw&r=0" width ="120px" height = "110px"></img>
        <a href ="index.php" class ="button">HOME</a>
        </div>
          <div class="bottomnav">
<div class="search-container">
  <form>
    <input type="text" placeholder="Search anything...">
    <button type="submit">Search</button>
  </form>
</div>
             <script>
              document.addEventListener('DOMContentLoaded', () => {
             const searchForm = document.querySelector('.search-container form');
const aboutPara = document.querySelector('#about');

searchForm.addEventListener('submit', (event) => {
  event.preventDefault();
  const searchTerm = searchForm.querySelector('input').value;
  const aboutText = aboutPara.textContent;
  if (aboutText.includes(searchTerm)) {
    const regex = new RegExp(searchTerm, 'g');
    aboutPara.innerHTML = aboutText.replace(regex, `<mark>${searchTerm}</mark>`);
  } else {
    console.log('not found');
  }
});
              });
             </script>  
          </div>
            
<br>
<br>
<p id="about">
            Our mission is to make laundry day as easy and stress-free as possible for our customers. We offer a wide range of services, including wash and fold, ironing, dry cleaning, carpet cleaning, house cleaning and alterations, all at affordable prices.

                Our team of experienced professionals takes great care in handling your garments, using only the best detergents and equipment to ensure that your clothes come back to you clean, fresh, and looking their best. Our top of the range machines ensure timeliness with less than 24 hours to get the job done, meaning if you are in a hurry, we got you.
                we are flexible and always on the clock, because you never know when an emergency will strike. But when it does, we will be there to provide a solution.

You want good business, we are in the business of making you look good so that you can really show your true colors!. We are located in Nairobi, Kisumu, Mombasa, Nakuru, Eldoret, Baringo and Naivasha.
                We are committed to providing excellent customer service and strive to exceed your expectations every time you visit us.Thank you for choosing our laundry service – we look forward to serving you!</p>
                <br>
                <p2>Our rates are as follows</p2>
                <table>
                    <tr>
                      <th>Service</th>
                      <th>Price</th>
                    </tr>
                    <tr>
                      <td>Wash and fold</td>
                      <td>ksh 100 per item</td>
                    </tr>
                    <tr>
                      <td>Ironing</td>
                      <td>ksh 50 per item</td>
                    </tr>
                    <tr>
                      <td>Dry cleaning</td>
                      <td>ksh 200 per item</td>
                    </tr>
                    <tr>
                        <td>Carpet cleaning</td>
                        <td>ksh 800 per item</td>
                    </tr>
                    <tr>
                        <td>House cleaning</td>
                        <td>Price vary by size</td>
                    </tr>
                    <tr>
                      <td>Alterations</td>
                      <td>Prices vary by service</td>
                    </tr>
                  </table>
          </div>
        
</div>
            </body>
            </html>
            
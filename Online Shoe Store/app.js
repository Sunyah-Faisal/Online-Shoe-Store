const wrapper = document.querySelector(".sliderWrapper");
const menuItems = document.querySelectorAll(".menuItem");
const div = document.getElementById("dom-target");

let current_prod = shoes_array[0];

const prod_img = document.querySelector(".productImg");
const prod_name = document.querySelector(".productTitle")
const prod_price = document.querySelector(".productPrice");
const prod_desc = document.querySelector(".productDesc");
const prod_colors = document.querySelectorAll(".color");
const prod_sizes = document.querySelectorAll(".size");

var finalorder={};
menuItems.forEach((item, index) => {
  item.addEventListener("click", () => {

    //change the current slide
    wrapper.style.transform = `translateX(${-100 * index}vw)`;

    //change the choosen product
    current_prod = shoes_array[index];
    color_images = [ {'color_code': current_prod[6], 'image': current_prod[4]}, 
                     {'color_code': current_prod[7], 'image': current_prod[5]} ]
    
    //change texts of currentProduct
    prod_name.textContent = current_prod[1];
    prod_desc.textContent = current_prod[2]
    prod_price.textContent = "$" + current_prod[3];
    prod_img.src = color_images[0].image;
    var finalshoename = prod_name.textContent
    var finalshoeprice = prod_price.textContent
    finalorder={};
    finalorder.shoe = finalshoename
    finalorder.price = finalshoeprice
    console.log(finalorder)

    //assign new colors
    prod_colors.forEach((color, index) => {
      color.style.backgroundColor = color_images[index].color_code;
    });
  });
});

prod_colors.forEach((color, index) => {
  color.addEventListener("click", () => {
    prod_img.src = color_images[index].image;
    var finalshoecolor = color_images[index].color_code;
    finalorder.color = finalshoecolor;
    console.log(finalorder);
  });
});

prod_sizes.forEach((size, index) => {
  size.addEventListener("click", () => {
    prod_sizes.forEach((size) => {
      size.style.backgroundColor = "white";
      size.style.color = "black";
    });
    size.style.backgroundColor = "black";
    size.style.color = "white";
    var finalshoesize = size.innerHTML;
    finalorder.size = finalshoesize
    console.log(finalorder);
  });
});

const productButton = document.querySelector(".productButton");
const payment = document.querySelector(".payment");
const close = document.querySelector(".close");

productButton.addEventListener("click", () => {
  payment.style.display = "flex";
  if (finalorder.color == undefined){
    for (var i = 0; i < shoes_array.length; i++) {
      if (shoes_array[i][1] == finalorder.shoe) {
        finalorder.color = shoes_array[i][6]
      }
    }
  }
  if (finalorder.size == undefined){finalorder.size = 42}
  console.log(finalorder)
  document.cookie = "SHOE="+finalorder.shoe;
  document.cookie = "COLOR="+finalorder.color;
  document.cookie = "SIZE="+finalorder.size;
  document.cookie = "PRICE="+finalorder.price;
});

close.addEventListener("click", () => {
  payment.style.display = "none";
});

function email_is_empty() {
  var value = document.getElementById('newsletter').value;

  is_valid = value.includes('@')

  if (value == '' || value == null)
    {alert ("Please enter an email.")
      return [false];
    }

  else{
    if (is_valid == false){
      alert ("Please enter a valid email address.")
        return [false];
      }
      
      else{
      alert ('Congratulations! You have subscribed to our newsletter. You will now receive our latest offers through email.')
      document.cookie = "correctemail="+value;
      return [true, value];    
    }}    
  }
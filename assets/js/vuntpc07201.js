let imgArr = [];
function saveImage() {
  let getImgSrc = document
    .querySelector(".carousel-item.active img")
    .getAttribute("src");
  imgSrc = getImgSrc.replace(/^.*[\\\/]/, "");
  if (!imgArr.includes(imgSrc)) {
    imgArr.push(imgSrc);
    localStorage.setItem("image", JSON.stringify(imgArr));
  }
  let imgLocal=JSON.parse(localStorage.getItem('image'))
  imgLocal.forEach(element => {
    console.log(element);
  });
}

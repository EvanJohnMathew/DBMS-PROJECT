const hospitals = document.querySelector('.fa-hospital').parentElement;
console.log(hospitals);

hospitals.addEventListener('click', () => {
  const list = document.querySelectorAll('.fa-hospital');
  Array.from(list).forEach((element, index) => {
    if (index > 0 && element.parentElement.style.display === 'none') {
      console.log(element);
      element.parentElement.style.display = 'block';
      console.log('hello world');
      element.parentElement.style.transition = '5s display';
    } else if (index > 0 && element.parentElement.style.display === 'block') {
      element.parentElement.style.display = 'none';
      element.parentElement.style.transition = '5s display';
    }
    console.log('NONE');
  });
});

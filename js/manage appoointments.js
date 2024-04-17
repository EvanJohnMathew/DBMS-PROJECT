const appointments = document.querySelector('.fa-calendar-check').parentElement;
console.log(appointments);

appointments.addEventListener('click', () => {

  const list = document.querySelectorAll('.fa-calendar-check');
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
  })

});

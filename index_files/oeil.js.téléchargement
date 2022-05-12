(function(){
    const iris = document.getElementsByClassName('iris');

    document.onmousemove = (event) => {
      const x = (event.clientX * 100) / window.innerWidth + '%';
      const y = (event.clientY * 100) / window.innerHeight + '%';
    
      for (let i = 0; i < iris.length; i++) {
        iris[i].style.left = x;
        iris[i].style.top = y;
        iris[i].transform = 'translate(-' + x + ',-' + y + ')';
      }
    };
})()
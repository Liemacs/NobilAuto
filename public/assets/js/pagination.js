function generatePaginationItems(currentPage, totalPages) {
    var paginationContainer = document.getElementById('pagination-container');

    var pagesToShow = 2;

    if (currentPage > 1) {
      createPaginationItem('Previous', currentPage - 1);
    }

    for (var i = Math.max(1, currentPage - pagesToShow); i <= Math.min(totalPages, currentPage + pagesToShow); i++) {
      createPaginationItem(i, i === currentPage); 
    }

    // Generate next link
    if (currentPage < totalPages) {
      createPaginationItem('Next', currentPage + 1);
    }

    function createPaginationItem(text, page) {
      var li = document.createElement('li');
      li.className = 'pagination-item';

      var div = document.createElement('div');
      div.textContent = text;

      li.appendChild(div);
      paginationContainer.appendChild(li);
    }
  }

  generatePaginationItems(2, 470);


  
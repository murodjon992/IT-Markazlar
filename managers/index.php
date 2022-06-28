<?include('header.php')
?>
        <div class="container-fluid px-4">
            <div class="row g-3 my-2">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <h4>Salom Xurmatli Menejer <strong class="text-success"> <?= $man?> </strong> IT-Markazi fillialiga xush kelibsiz!</h4>
                </div>
            </div>
        </div>
    </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

  <script type="text/javascript">
      var el = document.querySelector('#wrapper');
      var toggButton = document.querySelector('#menu-toggle');
    
      toggButton.addEventListener('click', function(){
          el.classList.toggle('toggled')
        })
      
  </script>
</body>
</html>
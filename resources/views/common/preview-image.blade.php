<script>
  const photoInput = document.getElementById('photo');
  const previewImg = document.getElementById('imagePreview');
  const placeholder = '{{ asset('assets/images/placeholder.png') }}';

  photoInput.addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
      previewImg.src = URL.createObjectURL(file);
    }
  });


  document.getElementById('resetbtn').addEventListener('click', function() {
    
    const removeImage = document.getElementById('removeImage');
    if (removeImage) {
      document.getElementById('removeImage').value = 1;
    }
    const parent = photoInput.parentNode;
    const form = document.createElement('form');
    
    parent.replaceChild(form, photoInput);
    form.appendChild(photoInput);
    form.reset();
    parent.replaceChild(photoInput, form);

    // Reset image preview
    imagePreview.src = placeholder;
  });
</script>
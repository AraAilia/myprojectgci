<section class="category-section">
  <div class="container">
    <div class="category-grid">
      <!-- Kategori 1 -->
      <div class="category-card">
        <a href="{{ route('category.show', ['slug' => 'kategori-1']) }}">
          <img src="path/to/category-image1.jpg" alt="Kategori 1" class="category-image">
          <h4 class="category-name">Kategori 1</h4>
        </a>
      </div>
      <!-- Kategori 2 -->
      <div class="category-card">
        <a href="{{ route('category.show', ['slug' => 'kategori-2']) }}">
          <img src="path/to/category-image2.jpg" alt="Kategori 2" class="category-image">
          <h4 class="category-name">Kategori 2</h4>
        </a>
      </div>
      <!-- Kategori 3 -->
      <div class="category-card">
        <a href="{{ route('category.show', ['slug' => 'kategori-3']) }}">
          <img src="path/to/category-image3.jpg" alt="Kategori 3" class="category-image">
          <h4 class="category-name">Kategori 3</h4>
        </a>
      </div>
      <!-- Kategori 4 -->
      <div class="category-card">
        <a href="{{ route('category.show', ['slug' => 'kategori-4']) }}">
          <img src="path/to/category-image4.jpg" alt="Kategori 4" class="category-image">
          <h4 class="category-name">Kategori 4</h4>
        </a>
      </div>
      <!-- Tambahkan kategori lainnya sesuai kebutuhan -->
    </div>
  </div>
</section>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .nav-tabs {
      margin-bottom: 20px;
    }

    .tab-content {
      padding: 20px;
      border: 1px solid #dee2e6;
      border-top: none;
      background-color: white;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <h1 class="text-center">Admin Panel</h1>
    <ul class="nav nav-tabs" id="adminTabs" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="gallery-tab" data-bs-toggle="tab" href="#gallery" role="tab" aria-controls="gallery" aria-selected="false">Gallery</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="skills-tab" data-bs-toggle="tab" href="#skills" role="tab" aria-controls="skills" aria-selected="false">Skills/Experience</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="about-tab" data-bs-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">About Us</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="category-tab" data-bs-toggle="tab" href="#category" role="tab" aria-controls="category" aria-selected="false">Category</a>
      </li>
    </ul>
    <div class="tab-content" id="adminTabsContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <form method="post">
          <div class="mb-3">
            <label for="homeTitle" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="homeTitle" placeholder="Enter home page title">
          </div>
          <div class="mb-3">
            <label for="homeDescription" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="homeDescription" rows="5" placeholder="Enter home page description"></textarea>
          </div>
          <button type="submit" class="btn btn-primary" name="home">Update</button>
        </form>
      </div>
      <div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
        <form method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="galleryFile" class="form-label">Upload Files</label>
            <input type="file" class="form-control" id="galleryFile" name="image" multiple>
          </div>
          <div class="mb-3">
            <label for="galleryTitle" class="form-label">Title</label>
            <input name="galleryTitle" type="text" class="form-control" id="galleryTitle" placeholder="Enter gallery title">
          </div>
          <div class="mb-3">
            <label for="galleryDescription" class="form-label">Description</label>
            <textarea class="form-control" name="galleryDescription" id="galleryDescription" rows="5" placeholder="Enter gallery description"></textarea>
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
      </div>
      <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
        <form method="post">
          <div class="mb-3">
            <label for="skillsTitle" class="form-label">Skills Title</label>
            <input name="skillsTitle" type="text" class="form-control" id="skillsTitle" placeholder="Enter skills title">
          </div>
          <div class="mb-3">
            <label for="skillsDescription" class="form-label">Skills Description</label>
            <textarea class="form-control" name="skillsDescription" id="skillsDescription" rows="5" placeholder="Enter skills description"></textarea>
          </div>
          <div class="mb-3">
            <label for="experienceTitle" class="form-label">Experience Title</label>
            <input name="experienceTitle" type="text" class="form-control" id="experienceTitle" placeholder="Enter experience title">
          </div>
          <div class="mb-3">
            <label for="experienceDescription" class="form-label">Experience Description</label>
            <textarea class="form-control" name="experienceDescription" id="experienceDescription" rows="5" placeholder="Enter experience description"></textarea>
          </div>
          <button type="submit" class="btn btn-primary" name="skills">Update</button>
        </form>
      </div>
      <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
        <form method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="aboutFile" class="form-label">Upload Files</label>
            <input type="file" class="form-control" id="aboutFile" name="aboutFile" multiple>
          </div>
          <div class="mb-3">
            <label for="aboutTitle" class="form-label">Title</label>
            <input name="aboutTitle" type="text" class="form-control" id="aboutTitle" placeholder="Enter about us title">
          </div>
          <div class="mb-3">
            <label for="aboutDescription" class="form-label">Description</label>
            <textarea class="form-control" name="aboutDescription" id="aboutDescription" rows="5" placeholder="Enter about us description"></textarea>
          </div>
          <button type="submit" class="btn btn-primary" name="about">Update</button>
        </form>
      </div>
      <div class="tab-pane fade" id="category" role="tabpanel" aria-labelledby="category-tab">
        <form method="post">
          <div class="mb-3">
            <label for="categoryName" class="form-label">Category Name</label>
            <input name="categoryName" type="text" class="form-control" id="categoryName" placeholder="Enter category name">
          </div>
          <div class="mb-3">
            <label for="categoryDescription" class="form-label">Category Description</label>
            <textarea class="form-control" name="categoryDescription" id="categoryDescription" rows="5" placeholder="Enter category description"></textarea>
          </div>
          <div class="mb-3">
            <label for="addCategory" class="form-label">Add New Category</label>
            <input name="addCategory" type="text" class="form-control" id="addCategory" placeholder="Enter new category name">
          </div>
          <button type="submit" class="btn btn-primary" name="category">Update</button>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+1F2M0E0s5+0M7AM7E1HZZSXOYV5R" crossorigin="anonymous"></script>
</body>
</html>

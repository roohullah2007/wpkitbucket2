    // Elements
    const avatarButton = document.getElementById('avatarButton');
    const dropdownMenu = document.getElementById('dropdownMenu');
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const sidebar = document.getElementById('sidebar');
    const closeSidebar = document.getElementById('close-sidebar');
    const searchIcon = document.getElementById('search-icon');
    const searchBar = document.getElementById('mobile-search-bar');
    
    // Toggle sidebar visibility on hamburger icon click
    hamburgerIcon.addEventListener('click', () => {
      sidebar.classList.toggle('left-[-100%]'); // Slide out or in sidebar
      sidebar.classList.toggle('left-0'); // Show sidebar
    });
  
    // Close sidebar on close button click
    closeSidebar.addEventListener('click', () => {
      sidebar.classList.toggle('left-[-100%]'); // Slide sidebar out
    });
  
    // Toggle search bar visibility on search icon click
    searchIcon.addEventListener('click', () => {
      searchBar.classList.toggle('hidden');
    });



  // Ensure the elements exist before adding event listeners
  if (avatarButton && dropdownMenu) {
    avatarButton.addEventListener('click', (event) => {
      event.preventDefault(); // Prevent default anchor behavior
      dropdownMenu.classList.toggle('hidden'); // Toggle visibility of the dropdown
    });

    window.addEventListener('click', (event) => {
      // Check if the click is outside the avatar button or dropdown menu
      if (!avatarButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
        dropdownMenu.classList.add('hidden'); // Hide the dropdown if clicked outside
      }
    });
  } else {
    console.error('Avatar button or dropdown menu not found');
  }

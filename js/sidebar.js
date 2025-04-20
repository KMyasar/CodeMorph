document.getElementById('sidebarToggle').addEventListener('click', function () {
    const sidebar = document.getElementById('sidebar');
    const openIcon = document.getElementById('openIcon');
    const closeIcon = document.getElementById('closeIcon');
    const main = document.querySelector('main');
    const sidebarToggle = document.getElementById('sidebarToggle');

    if (sidebar.style.left === '-250px' || sidebar.style.left === '') {
        sidebar.style.left = '0';
        main.style.marginLeft = '250px';
        openIcon.style.display = 'none';
        closeIcon.style.display = 'block';
        sidebarToggle.style.left = '200px'; // Move the toggle button to the right of the sidebar
        sidebarToggle.style.bottom = "10px";
    } else {
        sidebar.style.left = '-250px';
        main.style.marginLeft = '0';
        openIcon.style.display = 'block';
        closeIcon.style.display = 'none';
        sidebarToggle.style.left = '10px'; // Move the toggle button back to original position
    }
});

// Ensure the close icon is hidden initially
document.getElementById('closeIcon').style.display = 'none';

// Function to handle tab switching
function showTab(event, tab) {
    event.preventDefault();
    const content = {
        general: `<h6>Chat</h6>
                  <div class="d-flex align-items-center">
                      <p class="mb-0">Show tokens usage in chat</p>
                      <div class="form-check form-switch ms-auto">
                          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                          <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                      </div>
                  </div>`,
        profile: `<h6>Profile Details</h6>
                  <div class="mb-3">
                      <label for="emailInput" class="form-label">Email</label>
                      <input type="email" class="form-control" id="emailInput" placeholder="Enter your email" value="example@example.com">
                  </div>
                  <div class="mb-3">
                      <label for="phoneInput" class="form-label">Phone</label>
                      <input type="tel" class="form-control" id="phoneInput" placeholder="Enter your phone number" value="+1234567890">
                  </div>
                  <div class="save-button-container">
                      <button type="button" class="btn btn-primary">Save</button>
                  </div>`,
        tokens: `<h6>Token Usage</h6>
                 <div class="d-flex align-items-center">
                     <p class="mb-0">Available Token</p>
                     <span class="token-label">100</span>
                 </div>
                 <div class="d-flex align-items-center">
                     <p class="mb-0">Total Tokens</p>
                     <span class="token-label">500</span>
                 </div>
                 <div class="d-flex align-items-center">
                     <p class="mb-0">Current Version</p>
                     <span class="version-label">Free</span> <!-- Change to "Premium" if applicable -->
                 </div>
                 <div class="upgrade-button-container">
                     <button type="button" class="btn btn-warning" onclick="upgradeToPremium()">Upgrade to Premium</button>
                 </div>`,
        editor: `<h6>Editor Settings</h6>
                 <div class="d-flex align-items-center">
                     <p class="mb-0">Enable line wrapping</p>
                     <div class="form-check form-switch ms-auto">
                         <input class="form-check-input" type="checkbox" role="switch" id="lineWrappingSwitch">
                         <label class="form-check-label" for="lineWrappingSwitch"></label>
                     </div>
                 </div>`,
        sessions: `<h6>Active Logins</h6><p>location : chennai </p><p>Time : 2:29pm</p><p>Device : Chrome(windows)</p>`
    };
    document.getElementById("settingsContent").innerHTML = content[tab];

    // Remove 'active' class from all nav links
    document.querySelectorAll(".nav-link").forEach(link => link.classList.remove("active"));
    event.target.classList.add("active");
}

// Function to handle upgrade to premium
function upgradeToPremium() {
    alert("Redirecting to the Premium upgrade page...");
    // You can replace this with actual logic, such as redirecting to a payment page.
}
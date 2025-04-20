<!-- Main Content -->
<main>
        <div class="progress-container">
            <h2>Progress</h2>
            <div class="progress-circles">
                <div class="circle">
                    <span>3/50</span>
                    <p>In Progress</p>
                </div>
                <div class="circle">
                    <span>3 %</span>
                    <p>In Progress</p>
                </div>
            </div>
            <div class="time-stats">
                <p>Average Time: <span>12:25 min</span></p>
                <p>Total Time: <span>37:25 min</span></p>
            </div>
            <button class="btn-close-custom" onclick="window.location.href='Home.html'">Close</button>
        </div>

        <!-- Sidebar (reused from Home Page) -->
        <aside id="sidebar" class="bg-dark text-white d-flex flex-column">
            <div class="p-3">
                <h5>Code Conversion</h5>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white" data-bs-toggle="modal"
                            data-bs-target="#settingsModal">Settings</a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link text-white">Support</a></li>
                </ul>
            </div>
            <div class="flex-grow-1"></div>
            <div class="p-3">
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="#" class="nav-link text-white">Subscription</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white">Mohamed</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white">Sign out</a></li>
                </ul>
            </div>
        </aside>

        <!-- Sidebar Toggle Button -->
        <button id="sidebarToggle" class="btn position-fixed text-white">
            <img src="Assets/Icons/sidebar.svg" alt="Open" id="openIcon" style="display: block;">
            <img src="Assets/Icons/sidebar.svg" alt="Close" id="closeIcon" style="display: none;">
        </button>
    </main>
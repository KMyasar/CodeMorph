<!-- Settings Modal -->
<div class="modal fade" id="settingsModal" tabindex="-1" aria-labelledby="settingsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered settings-modal-dialog"
            style="max-width: 35%; width: auto; resize: both; overflow: auto;">
            <div class="modal-content"
                style="background-color: rgba(29, 31, 39, 0.97); color: aliceblue; height: 100%;">
                <div class="modal-header" style="color: aliceblue;">
                    <h5 class="modal-title" id="settingsModalLabel">Settings <img src="Assets/Icons/icons8-settings.svg"
                            alt="" style="height: 25px;"></h5>
                    <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <!-- Sidebar Navigation in Modal -->
                        <div class="col-3 border-end">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link active" onclick="showTab(event, 'general')">General <img
                                            src="Assets/Icons/icons8-free-code-camp.svg" style="height: 18px;"></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" onclick="showTab(event, 'profile')">Profile <img
                                            src="Assets/Icons/profile.svg" style="height: 18px" alt="" />
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" onclick="showTab(event, 'tokens')">Tokens <img
                                            src="Assets/Icons/tokens.svg" style="height: 18px;"></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" onclick="showTab(event, 'editor')">Editor <img
                                            src="Assets/Icons/editor.svg" style="height: 18px;"></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" onclick="showTab(event, 'sessions')">Sessions <img
                                            src="Assets/Icons/icons8-sessions.svg" style="height: 11px;"></a>
                                </li>
                            </ul>
                        </div>

                        <!-- Content Area in Modal -->
                        <div class="col-8">
                            <div id="settingsContent">
                                <!-- General Tab Content -->
                                <div id="general">
                                    <h6>Chat</h6>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0">Show tokens usage in chat</p>
                                        <div class="form-check form-switch ms-auto">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitchCheckDefault">
                                            <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Profile Tab Content -->
                                <div id="profile" style="display: none;">
                                    <h6>Profile Details</h6>
                                    <div class="mb-3">
                                        <label for="emailInput" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="emailInput"
                                            placeholder="Enter your email" value="example@example.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="phoneInput" class="form-label">Phone</label>
                                        <input type="tel" class="form-control" id="phoneInput"
                                            placeholder="Enter your phone number" value="+1234567890">
                                    </div>
                                    <!-- Save Button -->
                                    <div class="save-button-container">
                                        <button type="button" class="btn btn-primary">Save</button>
                                    </div>
                                </div>

                                <!-- Tokens Tab Content -->
                                <div id="tokens" style="display: none;">
                                    <h6>Token Usage</h6>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0">Available Token</p>
                                        <span class="token-label">100</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0">Total Tokens</p>
                                        <span class="token-label">500</span>
                                    </div>
                                    <!-- Current Version Label -->
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0">Current Version</p>
                                        <span class="version-label">Free</span>
                                        <!-- Change to "Premium" if applicable -->
                                    </div>
                                    <!-- Upgrade to Premium Button -->
                                    <div class="upgrade-button-container">
                                        <button type="button" class="btn btn-warning"
                                            onclick="upgradeToPremium()">Upgrade to Premium</button>
                                    </div>
                                </div>

                                <!-- Editor Tab Content -->
                                <div id="editor" style="display: none;">
                                    <h6>Editor Settings</h6>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0">Enable line wrapping</p>
                                        <div class="form-check form-switch ms-auto">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="lineWrappingSwitch">
                                            <label class="form-check-label" for="lineWrappingSwitch"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

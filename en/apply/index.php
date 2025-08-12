<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KLACK Studios | Actor Application</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&family=Bebas+Neue&display=stylesheet" rel="stylesheet">
    <link rel="stylesheet" href="../../styles/nav.css">
    <link rel="stylesheet" href="../../styles/footer.css">

    <style>
        :root {
            --primary: #ff5e1a;
            --primary-dark: #e04b00;
            --bg-dark: #0a0a0a;
            --bg-light: #1a1a1a;
            --text-primary: #ffffff;
            --text-secondary: #b3b3b3;
            --transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            --graffiti-green: #00ff00;
            --graffiti-purple: #ff00ff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: var(--bg-dark);
            color: var(--text-primary);
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            letter-spacing: -0.5px;
        }

        .container {
            width: 100%;
            height: 100vh;
            padding: 2rem 5vw;
            background: url('https://images.unsplash.com/photo-1622107906469-632c870f19e9?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'), rgba(15, 0, 0, 0.82);
            background-size: cover;
            background-position: center;
            background-blend-mode: overlay;
            overflow-y: auto;
        }

        .form-section {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
            background: rgba(16, 6, 6, 0.9);
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 0.8s ease forwards;
            margin-top: 25vh;
        }

        .progress-bar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 2rem;
        }

        .progress-step {
            flex: 1;
            text-align: center;
            padding: 0.5rem;
            background: rgba(255, 255, 255, 0.1);
            color: var(--text-secondary);
            font-size: 0.9rem;
            cursor: pointer;
            transition: var(--transition);
            position: relative;
        }

        .progress-step.active {
            background: var(--primary);
            color: var(--text-primary);
        }

        .progress-step.completed {
            background: rgba(255, 94, 26, 0.3);
        }

        .progress-step::after {
            content: '';
            position: absolute;
            top: 50%;
            right: -10px;
            width: 10px;
            height: 10px;
            background: var(--primary);
            border-radius: 50%;
            transform: translateY(-50%);
            display: none;
        }

        .progress-step.active::after,
        .progress-step.completed::after {
            display: block;
        }

        .section-content {
            display: none;
            opacity: 0;
            transform: translateY(20px);
            animation: slideIn 0.5s ease forwards;
        }

        .section-content.active {
            display: block;
        }

        .section-title {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 3px;
            background: var(--primary);
        }

        .form-group {
            margin-bottom: 1.5rem;
            opacity: 0;
            transform: translateY(20px);
            animation: slideIn 0.5s ease forwards;
            animation-delay: calc(0.1s * var(--delay));
        }

        .form-group label {
            display: block;
            font-size: 1rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
            color: var(--text-primary);
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.05);
            color: var(--text-primary);
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 8px rgba(255, 94, 26, 0.3);
        }

        .form-group textarea {
            min-height: 120px;
            resize: vertical;
        }

        .radio-group {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .radio-group label {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
        }

        .radio-group input[type="radio"] {
            appearance: none;
            width: 20px;
            height: 20px;
            border: 2px solid var(--text-secondary);
            border-radius: 50%;
            position: relative;
            cursor: pointer;
        }

        .radio-group input[type="radio"]:checked {
            border-color: var(--primary);
        }

        .radio-group input[type="radio"]:checked::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 10px;
            height: 10px;
            background: var(--primary);
            border-radius: 50%;
            transform: translate(-50%, -50%);
        }

        .file-upload {
            position: relative;
            padding: 2rem;
            border: 2px dashed rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            text-align: center;
            transition: var(--transition);
        }

        .file-upload:hover {
            border-color: var(--primary);
            background: rgba(255, 94, 26, 0.1);
        }

        .file-upload input[type="file"] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }

        .file-upload label {
            font-size: 1rem;
            color: var(--text-secondary);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            padding: 0.9rem 2.5rem;
            background: var(--primary);
            color: var(--text-primary);
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: var(--transition);
            border: none;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            margin: 0.5rem;
        }

        .btn:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(255, 94, 26, 0.2);
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: var(--transition);
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn-group {
            display: flex;
            justify-content: space-between;
            margin-top: 1rem;
        }

        /* Loading Popup */
        .loading-popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .loading-content {
            text-align: center;
            color: var(--text-primary);
            font-family: 'Inter', sans-serif;
            font-size: 1.5rem;
        }

        .spinner {
            width: 50px;
            height: 50px;
            border: 5px solid var(--text-secondary);
            border-top: 5px solid var(--primary);
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 0 auto 1rem;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Success/Error Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            position: relative;
            max-width: 600px;
            width: 90%;
            padding: 2rem;
            background: var(--bg-light);
            border-radius: 12px;
            text-align: center;
            animation: modalPop 0.5s ease forwards;
        }

        .modal-content.success h2 {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 3rem;
            color: var(--graffiti-green);
            text-shadow: 2px 2px 4px var(--graffiti-purple), -2px -2px 4px var(--primary);
            animation: graffitiPulse 2s infinite;
        }

        .modal-content.error h2 {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 2.5rem;
            color: #ff4444;
        }

        .modal-content p {
            font-size: 1.2rem;
            margin: 1rem 0;
            color: var(--text-primary);
        }

        .modal-content ul {
            list-style: none;
            margin: 1rem 0;
            color: #ff4444;
            text-align: left;
        }

        .modal-content .btn {
            margin-top: 1rem;
        }

        .modal-content .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: transparent;
            border: none;
            color: var(--text-secondary);
            font-size: 1.5rem;
            cursor: pointer;
        }

        .canvas-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.5;
        }

        @keyframes graffitiPulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        @keyframes modalPop {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Animations */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .form-section {
                padding: 1.5rem;
            }

            .progress-bar {
                flex-direction: column;
                gap: 0.5rem;
            }

            .progress-step {
                padding: 0.8rem;
            }

            .progress-step::after {
                display: none;
            }

            .section-title {
                font-size: 1.8rem;
            }

            .btn-group {
                flex-direction: column;
                gap: 1rem;
            }

            .modal-content.success h2 {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 1rem 3vw;
            }

            .form-section {
                padding: 1rem;
            }

            .section-title {
                font-size: 1.6rem;
            }

            .form-group input,
            .form-group select,
            .form-group textarea {
                font-size: 0.9rem;
            }

            .btn {
                width: 100%;
                justify-content: center;
            }

            .modal-content.success h2 {
                font-size: 2rem;
            }

            .modal-content p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <?php
    session_start();
    $csrf_token = bin2hex(random_bytes(32));
    $_SESSION['csrf_token'] = $csrf_token;
    require_once '../../components/nav.php';
    ?>

    <div class="container">
        <section class="form-section">
            <h2 class="section-title">Actor Application Form</h2>
            <form id="actor-application-form" action="../../backend/submit_application.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                <div class="progress-bar">
                    <div class="progress-step active" data-step="1">Personal Info</div>
                    <div class="progress-step" data-step="2">Professional Experience</div>
                    <div class="progress-step" data-step="3">Skills & Attributes</div>
                    <div class="progress-step" data-step="4">Availability</div>
                    <div class="progress-step" data-step="5">Uploads</div>
                </div>

                <div class="section-content active" data-step="1">
                    <div class="form-group" style="--delay: 1">
                        <h3>Personal Information</h3>
                    </div>
                    <div class="form-group" style="--delay: 2">
                        <label for="first-name">First Name</label>
                        <input type="text" id="first-name" name="first-name" required>
                    </div>
                    <div class="form-group" style="--delay: 3">
                        <label for="last-name">Last Name</label>
                        <input type="text" id="last-name" name="last-name" required>
                    </div>
                    <div class="form-group" style="--delay: 4">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    <div class="form-group" style="--delay: 5">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group" style="--delay: 6">
                        <label for="location">Location (City/Region)</label>
                        <input type="text" id="location" name="location" required>
                    </div>
                    <div class="form-group" style="--delay: 7">
                        <label for="gender">Gender</label>
                        <select id="gender" name="gender" required>
                            <option value="" disabled selected>Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                            <option value="prefer-not-to-say">Prefer Not to Say</option>
                        </select>
                    </div>
                    <div class="form-group" style="--delay: 8">
                        <label for="dob">Date of Birth</label>
                        <input type="date" id="dob" name="dob" required>
                    </div>
                    <div class="form-group" style="--delay: 9">
                        <label for="marital-status">Marital Status</label>
                        <select id="marital-status" name="marital-status" required>
                            <option value="" disabled selected>Select Status</option>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="divorced">Divorced</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group" style="--delay: 10">
                        <label for="occupation">Occupation (Current/Previous)</label>
                        <input type="text" id="occupation" name="occupation" required>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn next-btn" data-next="2">Next</button>
                    </div>
                </div>

                <div class="section-content" data-step="2">
                    <div class="form-group" style="--delay: 1">
                        <h3>Professional Experience</h3>
                    </div>
                    <div class="form-group" style="--delay: 2">
                        <label for="acting-experience">Years of Acting Experience</label>
                        <input type="number" id="acting-experience" name="acting-experience" min="0" required>
                    </div>
                    <div class="form-group" style="--delay: 3">
                        <label for="previous-roles">Previous Roles / Productions</label>
                        <textarea id="previous-roles" name="previous-roles" placeholder="List films, TV shows, theatre, commercials, etc."></textarea>
                    </div>
                    <div class="form-group" style="--delay: 4">
                        <label for="portfolio">Link to Acting Portfolio / Showreel</label>
                        <input type="url" id="portfolio" name="portfolio" placeholder="YouTube, Vimeo, etc.">
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn prev-btn" data-prev="1">Previous</button>
                        <button type="button" class="btn next-btn" data-next="3">Next</button>
                    </div>
                </div>

                <div class="section-content" data-step="3">
                    <div class="form-group" style="--delay: 1">
                        <h3>Skills & Attributes</h3>
                    </div>
                    <div class="form-group" style="--delay: 2">
                        <label for="languages">Languages Spoken</label>
                        <input type="text" id="languages" name="languages" placeholder="e.g., English, Spanish, French">
                    </div>
                    <div class="form-group" style="--delay: 3">
                        <label for="special-skills">Special Skills</label>
                        <textarea id="special-skills" name="special-skills" placeholder="e.g., Singing, Dancing, Martial Arts, Stunts"></textarea>
                    </div>
                    <div class="form-group" style="--delay: 4">
                        <label for="height">Height</label>
                        <input type="text" id="height" name="height" placeholder="e.g., 5'10&quot;">
                    </div>
                    <div class="form-group" style="--delay: 5">
                        <label for="weight">Weight</label>
                        <input type="text" id="weight" name="weight" placeholder="e.g., 150 lbs">
                    </div>
                    <div class="form-group" style="--delay: 6">
                        <label for="body-type">Body Type</label>
                        <select id="body-type" name="body-type">
                            <option value="" disabled selected>Select Body Type</option>
                            <option value="slim">Slim</option>
                            <option value="athletic">Athletic</option>
                            <option value="average">Average</option>
                            <option value="muscular">Muscular</option>
                            <option value="plus-size">Plus-Size</option>
                        </select>
                    </div>
                    <div class="form-group" style="--delay: 7">
                        <label for="tattoos">Tattoo/Piercing Details</label>
                        <textarea id="tattoos" name="tattoos" placeholder="Describe any tattoos or piercings"></textarea>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn prev-btn" data-prev="2">Previous</button>
                        <button type="button" class="btn next-btn" data-next="4">Next</button>
                    </div>
                </div>

                <div class="section-content" data-step="4">
                    <div class="form-group" style="--delay: 1">
                        <h3>Availability & Commitment</h3>
                    </div>
                    <div class="form-group" style="--delay: 2">
                        <label>Are You Available for Travel?</label>
                        <div class="radio-group">
                            <label><input type="radio" name="travel" value="yes" required> Yes</label>
                            <label><input type="radio" name="travel" value="no"> No</label>
                        </div>
                    </div>
                    <div class="form-group" style="--delay: 3">
                        <label>Are You Willing to Work Weekends/Night Shoots?</label>
                        <div class="radio-group">
                            <label><input type="radio" name="weekends" value="yes" required> Yes</label>
                            <label><input type="radio" name="weekends" value="no"> No</label>
                        </div>
                    </div>
                    <div class="form-group" style="--delay: 4">
                        <label for="availability">Current Availability</label>
                        <select id="availability" name="availability" required>
                            <option value="" disabled selected>Select Availability</option>
                            <option value="full-time">Full-time</option>
                            <option value="part-time">Part-time</option>
                            <option value="flexible">Flexible</option>
                        </select>
                    </div>
                    <div class="form-group" style="--delay: 5">
                        <label>Are You Currently Signed to Any Agency?</label>
                        <div class="radio-group">
                            <label><input type="radio" name="agency" value="yes" required> Yes</label>
                            <label><input type="radio" name="agency" value="no"> No</label>
                        </div>
                    </div>
                    <div class="form-group" style="--delay: 6" id="agency-details" style="display: none;">
                        <label for="agency-info">Agency Name & Contact</label>
                        <input type="text" id="agency-info" name="agency-info" placeholder="Agency name and contact details">
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn prev-btn" data-prev="3">Previous</button>
                        <button type="button" class="btn next-btn" data-next="5">Next</button>
                    </div>
                </div>

                <div class="section-content" data-step="5">
                    <div class="form-group" style="--delay: 1">
                        <h3>Uploads</h3>
                    </div>
                    <div class="form-group" style="--delay: 2">
                        <div class="file-upload">
                            <label>Upload Headshot</label>
                            <input type="file" id="headshot" name="headshot" accept="image/*" required>
                        </div>
                    </div>
                    <div class="form-group" style="--delay: 3">
                        <div class="file-upload">
                            <label>Upload Full Body Photo</label>
                            <input type="file" id="full-body" name="full-body" accept="image/*" required>
                        </div>
                    </div>
                    <div class="form-group" style="--delay: 4">
                        <div class="file-upload">
                            <label>Upload Voice Recording (Optional)</label>
                            <input type="file" id="voice-recording" name="voice-recording" accept="audio/*">
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn prev-btn" data-prev="4">Previous</button>
                        <button type="submit" class="btn">Submit Application</button>
                    </div>
                </div>
            </form>
        </section>
    </div>

    <!-- Loading Popup -->
    <div class="loading-popup" id="loading-popup">
        <div class="loading-content">
            <div class="spinner"></div>
            <p>Submitting...</p>
        </div>
    </div>

    <!-- Success/Error Modal -->
    <div class="modal" id="response-modal">
        <div class="modal-content">
            <canvas class="canvas-bg" id="particle-canvas"></canvas>
            <button class="close-btn" id="close-modal">&times;</button>
            <h2 id="modal-title"></h2>
            <p id="modal-message"></p>
            <div id="modal-errors"></div>
            <a id="modal-link" class="btn" style="display: none;" href="https://chat.whatsapp.com/INVITE_LINK_HERE" target="_blank">Join Our WhatsApp Group</a>
            <button class="btn" id="modal-close-btn" style="display: none;">Close</button>
        </div>
    </div>

    <?php require_once "../../components/footer.php"?>

    <script src='../../scripts/nav.js'></script>
    <script>
        // Progress bar navigation
        const progressSteps = document.querySelectorAll('.progress-step');
        const sectionContents = document.querySelectorAll('.section-content');
        const nextButtons = document.querySelectorAll('.next-btn');
        const prevButtons = document.querySelectorAll('.prev-btn');
        const form = document.getElementById('actor-application-form');
        const loadingPopup = document.getElementById('loading-popup');
        const responseModal = document.getElementById('response-modal');
        const modalTitle = document.getElementById('modal-title');
        const modalMessage = document.getElementById('modal-message');
        const modalErrors = document.getElementById('modal-errors');
        const modalLink = document.getElementById('modal-link');
        const modalCloseBtn = document.getElementById('modal-close-btn');
        const closeModalBtn = document.getElementById('close-modal');
        const modalContent = responseModal.querySelector('.modal-content');

        function showSection(step) {
            progressSteps.forEach(stepEl => stepEl.classList.remove('active'));
            sectionContents.forEach(content => content.classList.remove('active'));

            const targetStep = document.querySelector(`.progress-step[data-step="${step}"]`);
            const targetContent = document.querySelector(`.section-content[data-step="${step}"]`);

            targetStep.classList.add('active');
            targetContent.classList.add('active');

            progressSteps.forEach((stepEl, index) => {
                if (parseInt(stepEl.dataset.step) < step) {
                    stepEl.classList.add('completed');
                } else if (parseInt(stepEl.dataset.step) > step) {
                    stepEl.classList.remove('completed');
                }
            });
        }

        progressSteps.forEach(step => {
            step.addEventListener('click', () => {
                showSection(step.dataset.step);
            });
        });

        nextButtons.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                const nextStep = btn.dataset.next;
                showSection(nextStep);
            });
        });

        prevButtons.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                const prevStep = btn.dataset.prev;
                showSection(prevStep);
            });
        });

        // Agency details toggle
        document.querySelectorAll('input[name="agency"]').forEach(radio => {
            radio.addEventListener('change', (e) => {
                const agencyDetails = document.getElementById('agency-details');
                agencyDetails.style.display = e.target.value === 'yes' ? 'block' : 'none';
                if (e.target.value === 'yes') {
                    agencyDetails.style.animation = 'slideIn 0.5s ease forwards';
                }
            });
        });

        // File upload preview
        document.querySelectorAll('input[type="file"]').forEach(input => {
            input.addEventListener('change', (e) => {
                const label = e.target.parentElement.querySelector('label');
                const fileName = e.target.files[0]?.name || 'No file chosen';
                label.textContent = fileName;
            });
        });

        // Form submission with AJAX
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            loadingPopup.style.display = 'flex';

            const formData = new FormData(form);
            try {
                const response = await fetch(form.action, {
                    method: 'POST',
                    body: formData
                });

                const text = await response.text();
                loadingPopup.style.display = 'none';

                // Check if the response contains success message
                if (text.includes('Application Submitted Successfully')) {
                    modalContent.classList.add('success');
                    modalContent.classList.remove('error');
                    modalTitle.textContent = 'Congratulations!';
                    modalMessage.innerHTML = 'Your submission has been sent! Thank you for applying to KLACK Studios. We\'ll review your application and get back to you soon.';
                    modalErrors.innerHTML = '';
                    modalLink.style.display = 'inline-flex';
                    modalCloseBtn.style.display = 'inline-flex';
                    responseModal.style.display = 'flex';
                    startParticles();
                } else {
                    modalContent.classList.add('error');
                    modalContent.classList.remove('success');
                    modalTitle.textContent = 'Submission Errors';
                    modalMessage.textContent = 'Please correct the following errors and try again:';
                    modalErrors.innerHTML = text.includes('<ul>') ? text.match(/<ul>[\s\S]*<\/ul>/)[0] : '<p>Unknown error occurred.</p>';
                    modalLink.style.display = 'none';
                    modalCloseBtn.style.display = 'inline-flex';
                    responseModal.style.display = 'flex';
                    stopParticles();
                }
            } catch (error) {
                loadingPopup.style.display = 'none';
                modalContent.classList.add('error');
                modalContent.classList.remove('success');
                modalTitle.textContent = 'Error';
                modalMessage.textContent = 'Something went wrong. Please try again later.';
                modalErrors.innerHTML = '';
                modalLink.style.display = 'none';
                modalCloseBtn.style.display = 'inline-flex';
                responseModal.style.display = 'flex';
                stopParticles();
            }
        });

        // Close modal
        closeModalBtn.addEventListener('click', () => {
            responseModal.style.display = 'none';
            stopParticles();
        });

        modalCloseBtn.addEventListener('click', () => {
            responseModal.style.display = 'none';
            stopParticles();
        });

        // Particle animation for success modal
        const canvas = document.getElementById('particle-canvas');
        const ctx = canvas.getContext('2d');
        let particles = [];
        let animationFrameId;

        function resizeCanvas() {
            canvas.width = modalContent.offsetWidth;
            canvas.height = modalContent.offsetHeight;
        }

        function createParticle() {
            return {
                x: Math.random() * canvas.width,
                y: Math.random() * canvas.height,
                size: Math.random() * 5 + 2,
                speedX: (Math.random() - 0.5) * 4,
                speedY: (Math.random() - 0.5) * 4,
                color: `hsl(${Math.random() * 360}, 70%, 50%)`
            };
        }

        function startParticles() {
            resizeCanvas();
            particles = Array.from({ length: 50 }, createParticle);
            function animate() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                particles.forEach(p => {
                    p.x += p.speedX;
                    p.y += p.speedY;
                    if (p.x < 0 || p.x > canvas.width) p.speedX *= -1;
                    if (p.y < 0 || p.y > canvas.height) p.speedY *= -1;
                    ctx.beginPath();
                    ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
                    ctx.fillStyle = p.color;
                    ctx.fill();
                });
                animationFrameId = requestAnimationFrame(animate);
            }
            animate();
        }

        function stopParticles() {
            cancelAnimationFrame(animationFrameId);
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            particles = [];
        }

        window.addEventListener('resize', resizeCanvas);
    </script>
</body>
</html>
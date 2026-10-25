<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore learning, job-search, and career-planning resources from Quantum Link.">
    <title>Employment Resources - Quantum Link</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #333; line-height: 1.6; }
        header { background: linear-gradient(135deg, #1a1a2e, #16213e); color: #fff; padding: 1rem 2rem; }
        nav { max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center; gap: 2rem; }
        .logo { color: #fff; font-size: 1.5rem; font-weight: 700; text-decoration: none; white-space: nowrap; }
        .logo span, nav a.active, nav a:hover { color: #00d4ff; }
        nav ul { display: flex; flex-wrap: wrap; gap: 1.25rem; list-style: none; margin: 0; padding: 0; }
        nav ul a { color: #ddd; text-decoration: none; }
        .banner { background: linear-gradient(135deg, #0f3460, #1a1a2e); color: #fff; text-align: center; padding: 4rem 1.5rem; }
        .banner h1 { margin: 0 0 .5rem; font-size: clamp(2rem, 5vw, 3rem); }
        .banner p { max-width: 680px; margin: 0 auto; color: #ddd; font-size: 1.1rem; }
        main { max-width: 1100px; margin: 0 auto; padding: 3rem 1.5rem; }
        .intro { text-align: center; margin: 0 auto 2rem; max-width: 720px; }
        .cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.25rem; }
        .card { padding: 1.5rem; background: #fff; border-radius: 12px; box-shadow: 0 4px 20px #00000012; border-top: 4px solid #00b8d9; }
        .card h3 { color: #1a1a2e; margin-top: 0; }
        .card a { color: #0077b6; font-weight: 600; }
        .card p { color: #555; }
        .notice { margin-top: 2rem; padding: 1.25rem 1.5rem; background: #f0f9ff; border-radius: 10px; }
        footer { background: #1a1a2e; color: #ccc; text-align: center; padding: 1.5rem; }
        footer a { color: #00d4ff; text-decoration: none; }
        @media (max-width: 760px) {
            header { padding: 1rem; }
            nav { align-items: flex-start; flex-direction: column; gap: .75rem; }
            nav ul { gap: .5rem 1rem; }
        }
    </style>
</head>
<body>
    <header>
        <nav aria-label="Main navigation">
            <a class="logo" href="index.php">QUANTUM <span>LINK</span></a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="experience.php">Work Experience</a></li>
                <li><a href="skills.php">Practical Skills</a></li>
                <li><a href="guidance.php">Career Guidance</a></li>
                <li><a href="resources.php" class="active" aria-current="page">Employment Resources</a></li>
            </ul>
        </nav>
    </header>
    <section class="banner">
        <h1>Employment <span>Resources</span></h1>
        <p>Find starting points for learning, exploring opportunities, and preparing for your next application.</p>
    </section>
    <main>
        <section class="intro">
            <h2>Useful tools for your next step</h2>
            <p>External services have their own terms, availability, and regional coverage. Review each resource before sharing personal information or applying.</p>
        </section>
        <section class="cards" id="learning" aria-label="Learning resources">
            <article class="card">
                <h3>Online learning</h3>
                <p>Explore courses and build knowledge in a subject area at your own pace.</p>
                <a href="https://www.coursera.org/" target="_blank" rel="noopener noreferrer">Browse Coursera courses</a><br>
                <a href="https://www.edx.org/" target="_blank" rel="noopener noreferrer">Browse edX courses</a><br>
                <a href="https://skills.github.com/" target="_blank" rel="noopener noreferrer">Learn with GitHub Skills</a>
            </article>
            <article class="card" id="opportunities">
                <h3>Find opportunities</h3>
                <p>Search job listings and compare role requirements in your location and field.</p>
                <a href="https://www.linkedin.com/jobs/" target="_blank" rel="noopener noreferrer">Search LinkedIn Jobs</a><br>
                <a href="https://www.indeed.com/" target="_blank" rel="noopener noreferrer">Search Indeed</a>
            </article>
            <article class="card" id="career-planning">
                <h3>Plan your career</h3>
                <p>Research career paths, prepare application materials, and practice presenting your experience.</p>
                <a href="https://www.themuse.com/advice" target="_blank" rel="noopener noreferrer">Read career advice from The Muse</a><br>
                <a href="https://www.canva.com/resumes/" target="_blank" rel="noopener noreferrer">Explore resume templates</a>
            </article>
        </section>
        <aside class="notice">
            <strong>Application safety:</strong> Be cautious of requests for payment, banking details, or identity documents early in a hiring process. Verify an employer through its official website before responding.
        </aside>
    </main>
    <footer>
        <p>&copy; 2026 Quantum Link. All rights reserved. | <a href="index.php">Back to Home</a></p>
    </footer>
</body>
</html>

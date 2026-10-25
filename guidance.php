<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Practical career guidance to help you identify your strengths, set goals, and take your next step.">
    <title>Career Guidance - Quantum Link</title>
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
        .cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); gap: 1.25rem; }
        .card { padding: 1.5rem; background: #fff; border-radius: 12px; box-shadow: 0 4px 20px #00000012; border-top: 4px solid #00b8d9; }
        .card h3 { color: #1a1a2e; margin-top: 0; }
        .plan { margin-top: 2rem; padding: 2rem; border-radius: 12px; background: #f0f9ff; }
        .plan li { margin: .6rem 0; }
        .button { display: inline-block; margin-top: .75rem; padding: .7rem 1.3rem; border-radius: 2rem; background: #00d4ff; color: #1a1a2e; font-weight: 700; text-decoration: none; }
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
                <li><a href="guidance.php" class="active" aria-current="page">Career Guidance</a></li>
                <li><a href="resources.php">Employment Resources</a></li>
            </ul>
        </nav>
    </header>
    <section class="banner">
        <h1>Career <span>Guidance</span></h1>
        <p>Turn what matters to you into practical career goals, and take the next step with a plan you can adapt as you learn.</p>
    </section>
    <main>
        <section class="intro" id="career-planning">
            <h2>Build a direction that fits you</h2>
            <p>You do not need to have your whole career figured out. Start by learning about yourself, exploring options, and testing your ideas with small, achievable steps.</p>
        </section>
        <section class="cards" aria-label="Career planning steps">
            <article class="card">
                <h3>1. Know your strengths</h3>
                <p>List the skills, subjects, and activities you enjoy. Ask people you trust where they have seen you do your best work.</p>
            </article>
            <article class="card">
                <h3>2. Explore roles</h3>
                <p>Compare day-to-day responsibilities, required skills, and work environments. Look for several roles that match your interests.</p>
            </article>
            <article class="card">
                <h3>3. Close a skills gap</h3>
                <p>Choose one relevant skill to practice through a course, personal project, volunteering, or work experience.</p>
            </article>
            <article class="card">
                <h3>4. Make a connection</h3>
                <p>Ask someone in a field you are considering about their experience. Prepare a few questions and respect their time.</p>
            </article>
        </section>
        <section class="plan">
            <h2>Make a simple 30-day plan</h2>
            <ol>
                <li>Choose one role or field to investigate.</li>
                <li>Find two trustworthy sources and note the skills they ask for.</li>
                <li>Complete one small learning or portfolio project.</li>
                <li>Review what you learned and decide on your next step.</li>
            </ol>
            <a class="button" href="resources.php#career-planning">Explore career resources</a>
        </section>
    </main>
    <footer>
        <p>&copy; 2026 Quantum Link. All rights reserved. | <a href="index.php">Back to Home</a></p>
    </footer>
</body>
</html>

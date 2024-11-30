const { exec } = require('child_process');

exec('npx cypress run --browser=chrome --headed --spec cypress/e2e/file1.cy.js', (err, stdout, stderr) => {
    if (err) {
        console.error(`exec error: ${err}`);
        return;
    }
    console.log(`stdout: ${stdout}`);
    console.error(`stderr: ${stderr}`);
    setTimeout(() => {
        exec('npx cypress run --browser=chrome --headed --spec cypress/e2e/file2.cy.js', (err, stdout, stderr) => {
            if (err) {
                console.error(`exec error: ${err}`);
                return;
            }
            console.log(`stdout: ${stdout}`);
            console.error(`stderr: ${stderr}`);
        });
    }, 30000); // delay 5 detik
});

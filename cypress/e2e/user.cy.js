import { adminPage } from '../pages/Admin.Page';

describe('Add Page User Management', () => {
    const email = 'admin@gmail.com';
    const password = '123';

    beforeEach(() => {
        // Log in sebelum mengakses halaman lainnya
        adminPage.visit().login(email, password);
        adminPage.verifyLoginSuccess();
    });

    // Tes untuk memverifikasi navigasi ke halaman "Users"
    it('should navigate to the Users page', () => {
        adminPage.clickUsersMenu()
            .verifyUsersPage();
    });

    // Tes untuk memverifikasi navigasi ke halaman "Create New User"
    it('should navigate to the "Create New User" page', () => {
        adminPage.clickUsersMenu()
            .verifyUsersPage()
            .clickNewUserButton();
    });
});

describe('Page Create New User', () => {
  const email = 'admin@gmail.com';
  const password = '123';

  beforeEach(() => {
      // Log in sebelum mengakses halaman lainnya
      adminPage.visit().login(email, password);
      adminPage.verifyLoginSuccess();
  });

  // Tes untuk membuat pengguna baru dan membatalkan operasi
  it('should create a new user and then cancel the operation', () => {
      // Arahkan ke halaman "Users" dan klik tombol "New User"
      adminPage.clickUsersMenu()
          .verifyUsersPage()
          .clickNewUserButton();  // Klik tombol "New User"

      // Isi form "Create New User"
      const newUserName = 'John Doeee12';
      const newUserEmail = 'johndooee12@example.com';
      const newUserPassword = 'password1234';
      const newUserRole = 'author';

      adminPage.fillCreateUserForm(newUserName, newUserEmail, newUserPassword, newUserRole);

      // Kirim form (simulasi klik tombol Create)
      adminPage.submitCreateUserForm();

      // Sekarang, klik tombol Cancel untuk menguji perilaku cancel
      adminPage.clickCancelButton();

      // Verifikasi bahwa setelah mengklik Cancel, kita kembali ke halaman Users
      cy.url().should('include', '/admin/users');  // Verifikasi kita diarahkan kembali ke halaman Users

      cy.wait(30000);  // Menunggu beberapa detik untuk memastikan proses selesai
  });
});

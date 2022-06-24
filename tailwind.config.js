module.exports = {
  content: ["./*.{html,js}"],
  theme: {
    extend: {
      colors: {
        'ourCyan': '#B4E9FE', 
        'ourBlue': '#7A92B7',
        'ourDarkCyan': '#0093A3',
        'ourCream': '#CF8E8E',
        'ourSomeBlue': '#54649F',
        'ourAdminStyle': '#6DC0C0',
        'pasien': '#607BCC', 
        'dokter': '#6AA384',
        'pendaftar': '#DCB656',
        'poli': '#EF6969',
        'pembayaran': '#457244',
        'telahDiperiksa': '#6DC0C0',
        'belumDiperiksa': '#DC9656',
        'obat': '#B469EF',
      },
      fontFamily: {
        josefinSans: 'Josefin Sans'
      },
      borderWidth: {
        '1': '1px',
      },
      spacing: {
        '76': '18rem',
        '50': '12.5rem',
        '100': '28rem',
        '110': '32rem',
      },
      flex: {
        '2': '2 2 0%'
      }
    }
  },
  plugins: [],
}

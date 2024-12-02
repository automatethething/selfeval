# Next.js App

This is a Next.js application configured to connect to a PostgreSQL database.

## Installation

1. Clone the repository:
   ```bash
   git clone <repository-url>
   cd <repository-name>
   ```

2. Install dependencies:
   ```bash
   npm install
   ```

3. Create a `.env.local` file in the root directory and add your PostgreSQL connection details:
   ```env
   DATABASE_URL=postgres://<username>:<password>@<host>:<port>/<database>
   ```

4. Run the development server:
   ```bash
   npm run dev
   ```

## Database Configuration

Make sure to replace `<username>`, `<password>`, `<host>`, `<port>`, and `<database>` with your actual PostgreSQL database credentials.

## Next.js Documentation

For more information on Next.js, visit the [Next.js Documentation](https://nextjs.org/docs).

# Self-Evaluation App

A self evaluation help that helps leverage your personality traits to bring out your most unique assets, and will provide you custom tips to optimizing our doubling down on your strongest skill sets, and it also provides advice on opportunities to explore on your weaker traits as well.

## Architecture Overview
- OIDC-based Authentication
- Anonymous Personality Analysis
- OpenAI Integration with Privacy Protections

## Key Security Features
1. User identities never directly sent to OpenAI
2. Anonymized, encrypted personality insights
3. Unique anonymous identifiers for each evaluation

## Setup Requirements
- OIDC Provider Configuration
- OpenAI API Key
- Encryption Secret
- Database (PostgreSQL/MySQL recommended)

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
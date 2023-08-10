<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call(CategorySeeder::class);

          // Seed the categories table
          $categories = [
            'Information Technology',
            'Healthcare',
            'Finance',
            'Education',
            'Others'
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
            ]);
        }

        // Seed the skills table with category IDs
        $itSkills = [
            'Java',
            'Python',
            'C++',
            'HTML',
            'CSS',
            'JavaScript',
            'SQL',
            'NoSQL',
            'AWS',
            'Azure',
            'Cybersecurity',
            'iOS',
            'Android',
            'Agile',
            'DevOps',
            'Machine learning',
            'Data analysis',
            'Blockchain',
            'UI/UX design',
            'Networking',
        ];

        foreach ($itSkills as $skill) {
            Skill::create([
                'name' => $skill,
                'category_id' => 1,
            ]);
        }

        $healthcareSkills = [
            'Medical terminology',
            'Patient assessment',
            'Medical coding',
            'EHR management',
            'Pharmacology',
            'Patient care',
            'Clinical research',
            'Diagnostic testing',
            'Infection control',
            'Health education',
            'Surgical skills',
            'Emergency medical skills',
            'Patient advocacy',
            'Ethics and legal compliance',
            'Leadership and management',
            'Communication and interpersonal skills',
            'Cultural competence',
        ];

        foreach ($healthcareSkills as $skill) {
            Skill::create([
                'name' => $skill,
                'category_id' => 2,
            ]);
        }

        $financeSkills = [
            'Financial analysis',
            'Accounting',
            'Taxation',
            'Risk management',
            'Investment analysis',
            'Corporate finance',
            'Financial modeling',
            'Financial reporting',
            'Auditing',
            'Budgeting',
            'Cash management',
            'Payroll',
            'Bookkeeping',
            'Financial planning',
            'Banking',
            'Mergers and acquisitions',
            'Asset management',
            'Treasury management',
            'Capital markets',
            'Insurance',
        ];

        foreach ($financeSkills as $skill) {
            Skill::create([
                'name' => $skill,
                'category_id' => 3,
            ]);
        }

        $educationSkills = [
            'Curriculum design',
            'Lesson planning',
            'Assessment and evaluation',
            'Pedagogy',
            'Instructional technology',
            'Classroom management',
            'Special education',
            'Student counseling',
            'Teaching methods',
            'Educational psychology',
            'Educational research',
            'Adult education',
            'Early childhood education',
            'Language instruction',
            'Online learning',
            'Learning disabilities',
            'Assistive technology',
            'Teacher training',
            'Education administration',
            'Student affairs',
        ];

        foreach ($educationSkills as $skill) {
            Skill::create([
                'name' => $skill,
                'category_id' => 4,
            ]);
        }
    

    }
}

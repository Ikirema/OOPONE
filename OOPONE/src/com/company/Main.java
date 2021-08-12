package com.company;

import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
	// PROJECT ONE
        Scanner input = new Scanner(System.in);

        System.out.print("Enter a KCSE_grade: ");
        int KCSE_grade = input.nextInt();
        
        System.out.print("Enter interview_question_marks: ");
        int interview_question_marks = input.nextInt();

        System.out.print("confidence_level_score: ");
        int confidence_level_score = input.nextInt();

        {
            if (KCSE_grade >= 65 && (interview_question_marks >= 6 || confidence_level_score >= 5))
                System.out.print("ADMITTED!\n");

            else if (KCSE_grade >= 65 && (interview_question_marks < 6 || confidence_level_score < 5))
                System.out.print("REJECTED!\n");
        }
            if (KCSE_grade < 65)
                System.out.print("REJECTED!\n");
    }
}

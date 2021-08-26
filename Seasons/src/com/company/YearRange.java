package com.company;

public class YearRange {
    private int year1;
    private int year2;
    private int RangeType;
    private int firstdivisor;
    private int seconddivisor;

    public YearRange(int firstyear, int secondyear) {
        year1 = firstyear;
        year2 = secondyear;
    }

    public void setRangeType(int firstyear) {
        RangeType = firstyear;
    }

    public void setFirstYear(int firstYear) {
        year1 = firstYear;
    }

    public int getFirstYear() {
        return year1;
    }

    public void setSecondYear(int secondYear) {year2 = secondYear;}

    public int getSecondYear() {
        return year2;
    }

    public void setFirstDivisor(int firstyear) {
        firstdivisor = firstyear;
    }

    public int getFirstDivisor() {
        return firstdivisor;
    }

    public void setSecondDivisor(int secondyear) {
        seconddivisor = secondyear;
    }

    public int getSecondDivisor() {
        return seconddivisor;
    }

    public void printYears(){
         while (year1 <= year2){
            year1++;
            if(year1 % firstdivisor == 0 && year1 % seconddivisor == 0)
                System.out.println(year1);
        }

    }
}

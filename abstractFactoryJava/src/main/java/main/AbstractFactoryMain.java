package main;

import theme.Showable;
import theme.ThemeFactory;
import theme.dark.DarkThemeFactory;
import theme.light.LightThemeFactory;

import java.util.LinkedList;
import java.util.List;

public class AbstractFactoryMain {

    /**
     * Note the difference between the two Theme is the creation of the ThemeFactory
     *
     * @param args command line arguments
     */
    public static void main(String[] args) {

        // Create dark theme
        ThemeFactory darkTheme = new DarkThemeFactory();

        // Create all dark theme components and store them in a list
        List<Showable> darkThemeComponents = new LinkedList <>();

        darkThemeComponents.add( darkTheme.createToolbar() );
        darkThemeComponents.add( darkTheme.createDialog() );
        darkThemeComponents.add( darkTheme.createFooter() );

        // Show all dark theme components
        darkThemeComponents.forEach( Showable::show );

        // For the light theme is the same thing
        // Create light theme
        ThemeFactory lightTheme = new LightThemeFactory();

        // Create all light theme components and store them in a list
        List<Showable> lightThemeComponents = new LinkedList <>();

        lightThemeComponents.add( lightTheme.createToolbar() );
        lightThemeComponents.add( lightTheme.createDialog() );
        lightThemeComponents.add( lightTheme.createFooter() );

        // Show all light theme components
        lightThemeComponents.forEach( Showable::show );

    }
}
